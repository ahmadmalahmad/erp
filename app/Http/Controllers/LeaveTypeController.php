<?php

namespace App\Http\Controllers;

use App\Models\LeaveType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LeaveTypeController extends Controller
{
    public function index()
    {
        if (\Auth::user()->can('manage leave type')) {
            $leavetypes = LeaveType::where('created_by', '=', \Auth::user()->creatorId())->get();

            return view('leavetype.index', compact('leavetypes'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    public function create()
    {

        if (\Auth::user()->can('create leave type')) {
            return view('leavetype.create');
        } else {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    public function store(Request $request)
    {

        if (\Auth::user()->can('create leave type')) {

            $validator = \Validator::make(
                $request->all(),
                [
                    'title' => 'required|unique:leave_types,title',
                    'days' => 'required|numeric',
                    'min_years' => 'required|numeric|min:1',
                    'max_years' => 'required|numeric|min:2',
                ]
            );

            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            $leavetype             = new LeaveType();
            $leavetype->title      = $request->title;
            $leavetype->days       = $request->days;
            $leavetype->min_years       = $request->min_years;
            $leavetype->max_years       = $request->max_years;
            $leavetype->created_by = \Auth::user()->creatorId();
            $leavetype->save();

            return redirect()->route('leavetype.index')->with('success', __('LeaveType  successfully created.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    public function show(LeaveType $leavetype)
    {
        return redirect()->route('leavetype.index');
    }

    public function edit(LeaveType $leavetype)
    {
        if (\Auth::user()->can('edit leave type')) {
            if ($leavetype->created_by == \Auth::user()->creatorId()) {

                return view('leavetype.edit', compact('leavetype'));
            } else {
                return response()->json(['error' => __('Permission denied.')], 401);
            }
        } else {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    public function update(Request $request, LeaveType $leavetype)
    {
        if (\Auth::user()->can('edit leave type')) {
            if ($leavetype->created_by == \Auth::user()->creatorId()) {
                $validator = \Validator::make(
                    $request->all(),
                    [
                        'title' => ['required', Rule::unique('leave_types', 'title')->ignore($leavetype->id), 'max:20', 'min:3'],
                        'days' => 'required|numeric',
                        'min_years' => 'required|numeric|min:1',
                        'max_years' => 'required|numeric|min:2',
                    ]
                );

                if ($validator->fails()) {
                    $messages = $validator->getMessageBag();

                    return redirect()->back()->with('error', $messages->first());
                }

                $leavetype->title = $request->title;
                $leavetype->days  = $request->days;
                $leavetype->min_years       = $request->min_years;
                $leavetype->max_years       = $request->max_years;
                $leavetype->save();

                return redirect()->route('leavetype.index')->with('success', __('LeaveType successfully updated.'));
            } else {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    public function destroy(LeaveType $leavetype)
    {
        if (\Auth::user()->can('delete leave type')) {
            if ($leavetype->created_by == \Auth::user()->creatorId()) {
                $leavetype->delete();

                return redirect()->route('leavetype.index')->with('success', __('LeaveType successfully deleted.'));
            } else {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }
}
