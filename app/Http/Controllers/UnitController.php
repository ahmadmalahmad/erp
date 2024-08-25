<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Branch;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(\Auth::user()->can('manage unit'))
        {
            $units = Unit::where('created_by', '=', \Auth::user()->creatorId())->get();

            return view('unit.index', compact('units'));
        }
        else
        {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(\Auth::user()->can('create unit'))
        {
            $department = Department::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
            $branch = Branch::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');

            return view('unit.create', compact('branch','department'));
        }
        else
        {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(\Auth::user()->can('create unit'))
        {

            $validator = \Validator::make(
                $request->all(), [
                                   'branch_id' => 'required',
                                   'department_id' => 'required',
                                   'name' => ['required','unique:units,name','max:20','min:3'],
                               ]
            );
            if($validator->fails())
            {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            $unit             = new Unit();
            $unit->branch_id  = $request->branch_id;
            $unit->department_id  = $request->department_id;
            $unit->name       = $request->name;
            $unit->created_by = \Auth::user()->creatorId();
            $unit->save();

            return redirect()->route('unit.index')->with('success', __('Unit  successfully created.'));
        }
        else
        {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return redirect()->route('unit.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        if(\Auth::user()->can('edit unit'))
        {
        if($unit->created_by == \Auth::user()->creatorId())
            {
                $department = Department::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
                $branch = Branch::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');

                return view('unit.edit', compact('department', 'branch','unit'));
            }
            else
            {
                return response()->json(['error' => __('Permission denied.')], 401);
            }
        }
        else
        {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        if(\Auth::user()->can('edit unit'))
        {
            if($unit->created_by == \Auth::user()->creatorId())
            {
                $validator = \Validator::make(
                    $request->all(), [
                                       'branch_id' => 'required',
                                        'department_id' => 'required',
                                        'name' => ['required',Rule::unique('units','name')->ignore($unit->id),'max:20','min:3'],
                                        ]
                );
                if($validator->fails())
                {
                    $messages = $validator->getMessageBag();

                    return redirect()->back()->with('error', $messages->first());
                }

                $unit->branch_id = $request->branch_id;
                $unit->department_id = $request->department_id;
                $unit->name      = $request->name;
                $unit->save();

                return redirect()->route('unit.index')->with('success', __('Unit successfully updated.'));
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        }
        else
        {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        if(\Auth::user()->can('delete unit'))
        {
            if($unit->created_by == \Auth::user()->creatorId())
            {
                $unit->delete();

                return redirect()->route('unit.index')->with('success', __('Unit successfully deleted.'));
            }
            else
            {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        }
        else
        {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }
}
