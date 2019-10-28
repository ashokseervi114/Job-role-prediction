<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Profile $profile, User $user)
    {
        return view('profiles.profile', [
                'profileUser' => $user,
                'profilesUser' => $profile
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'fathername' => 'required',
            'mothername' => 'required',
            'college' => 'required',
            'address_line_one' => 'required',
            'address_line_two' => 'required',
            'address_city' => 'required',
            'address_state' => 'required',
            'address_zip' => 'required',
        ]);
        $profile = Profile::create([
            'user_id' => auth()->id(),
            'fullname' => request('fullname'),
            'fathername' => request('fathername'),
            'mothername' => request('mothername'),
            'college' => request('college'),
            'address_line_one' => request('address_line_one'),
            'address_line_two' => request('address_line_two'),
            'address_city' => request('address_city'),
            'address_state' => request('address_state'),
            'address_zip' => request('address_zip'),
        ]);

        return view('profiles.show');
        // return redirect($profile->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile, User $user)
    {
        return view('profiles.show', [
                'profileUser' => $user,
                'profilesUser' => $profile
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
