<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programminglanguages;
use App\Http\Requests\ProgramminglanguagesRequest;
use App\Http\Requests\ProgramminglanguagesRequest2;


class ProgramminglanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $programminglanguages = Programminglanguages::all();
        return $programminglanguages;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProgramminglanguagesRequest $request)
    {
        $newProgramminglanguages = new Programminglanguages();
        $newProgramminglanguages->name = $request->name;
        $newProgramminglanguages->creator = $request->creator;
        $newProgramminglanguages->release_date = $request->release_date;
        $newProgramminglanguages->description = $request->description;
        $newProgramminglanguages->current_version = $request->current_version;
        $newProgramminglanguages->is_active = $request->is_active;
        $newProgramminglanguages->paradigm = $request->paradigm;
        $newProgramminglanguages->website = $request->website;
        // print_r($newProgramminglanguages);
        $newProgramminglanguages->save();
        return $newProgramminglanguages;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $programminglanguages = Programminglanguages::find($id);
        return $programminglanguages;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ProgramminglanguagesRequest2 $request, string $id)
    {
        $programminglanguages = Programminglanguages::find($id);
        $programminglanguages->name = $request->name ?? $programminglanguages->name;
        $programminglanguages->creator = $request->creator ?? $programminglanguages->creator;
        $programminglanguages->release_date = $request->release_date ?? $programminglanguages->release_date;
        $programminglanguages->description = $request->description ?? $programminglanguages->description;
        $programminglanguages->current_version = $request->current_version ?? $programminglanguages->current_version;
        $programminglanguages->is_active = $request->is_active ?? $programminglanguages->is_active;
        $programminglanguages->paradigm = $request->paradigm ?? $programminglanguages->paradigm;
        $programminglanguages->website = $request->website ?? $programminglanguages->website;
        $programminglanguages->save();
        return $programminglanguages;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $programminglanguages = Programminglanguages::find($id);
        $programminglanguages->delete();
        return response()->json([
            'message' => 'programminglanguages deleted',
            'programminglanguages' => $programminglanguages
        ],200);
        
    }
}
