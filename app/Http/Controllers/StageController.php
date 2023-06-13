<?php

namespace App\Http\Controllers;

use App\Models\stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class StageController extends Controller
{
    public function index()
    {
        $stage = Stage::orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.stage_dash.list', ['stages' => $stage]);
    }

    public function create()
    {
        return view('dashboard.stage_dash.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'annee' => 'required',
            'moisMax' => 'required',
            'dateDepart' => 'required',
            'dateFin' => 'required',
            'demandeDate' => 'required',
            'parrin' => 'required',
            'stageType' => 'required',
        ]);

        if ($validator->passes()) {
            $stageData = $request->only([
                'annee',
                'moisMax',
                'dateDepart',
                'dateFin',
                'demandeDate',
                'parrin',
                'stageType',
            ]);

            Stage::create($stageData);
            return redirect()->route('stages.index')->with('success', 'Stage added successfully.');
        } else {
            // return with errors
            return redirect()->route('dashboard.stage_dash.create')->withErrors($validator)->withInput();
        }
    }
    
    public function edit(Stage $stage) {
        return view('dashboard.stage_dash.edit', ['stage' => $stage]);
    }
    
    public function update(Stage $stage, Request $request) {
        $validator = Validator::make($request->all(), [
            'annee' => 'required',
            'moisMax' => 'required',
            'dateDepart' => 'required',
            'dateFin' => 'required',
            'demandeDate' => 'required',
            'parrin' => 'required',
            'stageType' => 'required',
        ]);
    
        if ($validator->passes()) {
            $stage->fill($request->post())->save();
    
            return redirect()->route('stages.index')->with('success', 'Stage updated successfully.');
        } else {
            return redirect()->route('stages.edit', $stage->id)->withErrors($validator)->withInput();
        }
    }
    
    public function destroy(Stage $stage, Request $request) {
        $stage->delete();
        return redirect()->route('stages.index')->with('success', 'Stage deleted successfully.');
    }
    
}
