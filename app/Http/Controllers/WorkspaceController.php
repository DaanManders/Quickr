<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the currently authenticated user
        $User = auth()->user();

        // Get the workspaces that belong to the authenticated user
        $Workspaces = Workspace::where('user_id', $User->id)->get();

        // Pass the data to the Inertia view
        return Inertia::render('Portal', [
            'Workspaces' => $Workspaces,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $Request)
    {
        $ValidateData = $Request->validate([
            'name' => 'required|string|max:30'
        ]);

        $Workspace = Workspace::create([
            ...$ValidateData,
            'user_id' => $Request->user()->id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Workspace $Workspace)
    {
        return Inertia::render('Workspace', [
            'Workspace' => $Workspace,
        ]);
    }

        /**
     * Display the specified resource.
     */
    public function settings(Workspace $Workspace)
    {
        return Inertia::render('Settings', [
            'Workspace' => $Workspace,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $Request, Workspace $Workspace)
    {
        $Validate = $Request->validate([
            'name' => 'required|string|max:30',
        ]);

        $Workspace->update([
            'name' => $Validate['name'],
        ]);

        return Inertia::render('Settings', [
            'Workspace' => $Workspace,
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workspace $Workspace)
    {
        $Workspace->delete();

        return redirect()->route('Portal');
    }
}
