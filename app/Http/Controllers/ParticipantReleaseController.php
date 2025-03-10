<?php

namespace App\Http\Controllers;

use App\Models\Release;
use App\Models\ParticipantRelease;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipantReleaseController extends Controller
{

    public function index()
    {
        $participant_releases = ParticipantRelease::all();
        $users = User::all();
        $releases = Release::all();
        return view('participant_releases.index', compact('participant_releases', 'users', 'releases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $participant_release = new ParticipantRelease();
        $participant_release->users_id = $request->users_id;
        $participant_release->releases_id = $request->releases_id;
        $participant_release->save();
        return redirect()->route('participant_releases.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $participant_release = ParticipantRelease::find($id);
        $users = User::all();
        $releases = Release::all();
        return view('participant_releases.edit', compact('participant_release', 'users', 'releases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $participant_release = ParticipantRelease::find($id);
        $participant_release->users_id = $request->users_id;
        $participant_release->releases_id = $request->releases_id;
        $participant_release->save();
        return redirect()->route('participant_releases.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $participant_release = ParticipantRelease::find($id);
        $participant_release->delete();
        return redirect()->route('participant_releases.index');
    }
}
