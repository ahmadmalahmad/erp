<?php

namespace App\Http\Controllers;

use App\Models\AssetsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AssetsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->can('manage assets type')) {
            
            $assetsTypes = AssetsType::where('created_by', '=', Auth::user()->creatorId())->get();

            return view('assetsType.index', compact('assetsTypes'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->can('create assets type')) {
            return view('assetsType.create');
        } else {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->can('create assets type')) {

            $validator = Validator::make(
                $request->all(),
                [
                    'name' => 'required|unique:assets_types,name',
                ]
            );
            if ($validator->fails()) {
                $messages = $validator->getMessageBag();

                return redirect()->back()->with('error', $messages->first());
            }
            $assetsType             = new AssetsType();
            $assetsType->name       = $request->name;
            $assetsType->created_by = Auth::user()->creatorId();
            $assetsType->save();

            return redirect()->route('assets-type.index')->with('success', __('Assets Type successfully created.'));
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AssetsType $assetsType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssetsType $assetsType)
    {
        if (Auth::user()->can('edit assets type')) {
            if ($assetsType->created_by == Auth::user()->creatorId()) {

                return view('assetsType.edit', compact('assetsType'));
            } else {
                return response()->json(['error' => __('Permission denied.')], 401);
            }
        } else {
            return response()->json(['error' => __('Permission denied.')], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetsType $assetsType)
    {
        if (Auth::user()->can('edit assets type')) {
            if ($assetsType->created_by == Auth::user()->creatorId()) {
                $validator = Validator::make(
                    $request->all(),
                    [
                        'name' => ['required', Rule::unique('assets_types', 'name')->ignore($assetsType->id), 'max:20', 'min:3'],
                    ]
                );

                if ($validator->fails()) {
                    $messages = $validator->getMessageBag();

                    return redirect()->back()->with('error', $messages->first());
                }

                $assetsType->name       = $request->name;
                $assetsType->created_by = Auth::user()->creatorId();
                $assetsType->save();

                return redirect()->route('assets-type.index')->with('success', __('Assets Type successfully updated.'));
            } else {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssetsType $assetsType)
    {
        if (Auth::user()->can('delete assets type')) {
            if ($assetsType->created_by == Auth::user()->creatorId()) {
                $assetsType->delete();

                return redirect()->route('assetsType.index')->with('success', __('Assets Type successfully deleted.'));
            } else {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
    }
}
