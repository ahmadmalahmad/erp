<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Department;
use App\Models\Branch;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(\Auth::user()->can('manage section'))
        {
            $sections = Section::where('created_by', '=', \Auth::user()->creatorId())->get();

            return view('section.index', compact('section'));
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
        if(\Auth::user()->can('create section'))
        {
            $department = Department::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
            $branch = Branch::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
            $unit = Unit::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');

            return view('section.create', compact('branch','department','unit'));
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
        if(\Auth::user()->can('create section'))
        {

            $validator = \Validator::make(
                $request->all(), [
                                   'branch_id' => 'required',
                                   'department_id' => 'required',
                                   'unit_id' => 'required',
                                   'name' => ['required','unique:units,name','max:20','min:3'],
                               ]
            );
            if($validator->fails())
            {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }

            $section             = new Section();
            $section->branch_id  = $request->branch_id;
            $section->department_id  = $request->department_id;
            $section->unit_id  = $request->unit_id;
            $section->name       = $request->name;
            $section->created_by = \Auth::user()->creatorId();
            $section->save();

            return redirect()->route('section.index')->with('success', __('Section  successfully created.'));
        }
        else
        {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        return redirect()->route('section.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        if(\Auth::user()->can('edit section'))
        {
        if($section->created_by == \Auth::user()->creatorId())
            {
                $department = Department::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
                $branch = Branch::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');
                $unit = Unit::where('created_by', \Auth::user()->creatorId())->get()->pluck('name', 'id');

                return view('section.edit', compact('department', 'branch','unit','section'));
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
    public function update(Request $request, Section $section)
    {
        if(\Auth::user()->can('edit section'))
        {
            if($section->created_by == \Auth::user()->creatorId())
            {
                $validator = \Validator::make(
                    $request->all(), [
                                       'branch_id' => 'required',
                                        'department_id' => 'required',
                                        'unit_id' => 'required',
                                        'name' => ['required',Rule::unique('units','name')->ignore($section->id),'max:20','min:3'],
                                   ]
                );
                if($validator->fails())
                {
                    $messages = $validator->getMessageBag();

                    return redirect()->back()->with('error', $messages->first());
                }

                $section->branch_id = $request->branch_id;
                $section->department_id = $request->department_id;
                $section->unit_id = $request->unit_id;
                $section->name      = $request->name;
                $section->save();

                return redirect()->route('section.index')->with('success', __('Section successfully updated.'));
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
    public function destroy(Section $section)
    {
        if(\Auth::user()->can('delete section'))
        {
            if($section->created_by == \Auth::user()->creatorId())
            {
                $section->delete();

                return redirect()->route('section.index')->with('success', __('Section successfully deleted.'));
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
