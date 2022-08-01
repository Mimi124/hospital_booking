<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabTemplate;

class LabTemplateController extends Controller
{
    public function index()
    {
        $labtemplate=LabTemplate::all();
        return view('laboratorist.showLabTemplate',compact('labtemplate'));
    }

    public function create()
    {
        return view('laboratorist.add-labtemplate');
    }

    public function store(Request $request)
    {
        LabTemplate::create([
            'name'=>$request->name,
            'template'=>$request->template
        ]);
        // flash message
        session()->flash('success', 'New Lab Template Added Successfully.');
        // redirect user
        return redirect()->route('showlabtemplate');
    }

    // public function show(LabTemplate $labtemplate)
    // {
    //     return view('lap.laptemplates.show')->with('labtemplate',$labtemplate);
    // }

    public function update($id)
    {
        $labtemplate=LabTemplate::find($id);
        return view('laboratorist.update-labtemplate',compact('labtemplate'));
    }

    public function edit(Request $request, $id)
    {
        $labtemplate=LabTemplate::find($id);
        $labtemplate->edit($request->only('name','labtemplate'));
        $labtemplate->save();
        // flash message
        session()->flash('success', 'Lab Template updated Successfully.');
        // redirect user
        return redirect()->route('showlabtemplate');
    }

    public function destroy($id)
    {
        $labtemplate=LabTemplate::find($id);
        $labtemplate->delete();
        // flash message
        session()->flash('success', ' Lab Template Deleted Successfully.');
        // redirect user
        return redirect()->route('showlabtemplate');
    }
    //
}
