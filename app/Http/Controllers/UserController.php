<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Retrieving using a condition */
        $users = User::where('is_connected',1)
        ->orderBy('first_name','desc')
        ->take(10)
        ->get();


        $user = User::first();
        dd($user);

        /*
         Methods like all() and get() retrieve a collection
         we can use it somehow for helpfull methods
         https://laravel.com/docs/7.x/eloquent-collections#available-methods


         Cursor() : lazy collection implementation
        */

        /* Hydrate data */
        // $user = User::where('id',2)->get();
        // $user->first_name = "abdellatif";
        // $user->refresh();

    //     $user = User::cursor()->filter(function($user){
           
    //          return $user->id === 5;

    //     });

    // dd($user);

        return view('user.home',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
