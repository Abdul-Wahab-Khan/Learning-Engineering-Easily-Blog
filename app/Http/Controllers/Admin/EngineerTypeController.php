<?php

namespace App\Http\Controllers\Admin;

use App\Models\EngineerType;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Http\Requests\Admin\EngineeringTypeRequest;

class EngineerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineeringTypes = EngineerType::all();
        return view('admin.engineeringtypes.index', compact('engineeringTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.engineeringtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engineerType = EngineerType::create($request->all());
        return redirect()->route('admin.engineeringtypes.edit', $engineerType)->withSuccess(__('engineeringtypes.created'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EngineerType  $engineerType
     * @return \Illuminate\Http\Response
     */
    public function edit($engineerType)
    {
        $engineerType = EngineerType::find($engineerType);
        return view('admin.engineeringtypes.edit', compact('engineerType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EngineerType  $engineerType
     * @return \Illuminate\Http\Response
     */
    public function update(EngineeringTypeRequest $request, EngineerType $engineerType)
    {
        dd($request);
        $engineerType->update($request->validate());
        return redirect()->route('admin.engineeringtypes.edit', $engineerType)->withSuccess(__('posts.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EngineerType  $engineerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EngineerType $engineerType)
    {
        //
    }
}
