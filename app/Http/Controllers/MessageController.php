<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $message = DB::table('messages')->select('content')->where('id', '=', 1)->get();
          
        // $msg = Message::get();
        // dd($msg);

        $mess = Message::find([1,2,3]);
        $mes = Message::firstWhere('id_user',3);
        dd($mes);

        // $ids = DB::table('messages')->pluck('id_user');
        // dd($ids);
         
        // dd($message);
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
        //get connected user id and password
        // auth()->user()->id
        //   $message = new Message();
        //   $message->content='Hello dearer';
        //   $message->id_user=3;
        //   $message->save();

        /**Mass assignement make fillable array or guarded */
        // Message::created([
        //     'content'=>'Hello world',
        //     'id_user' => rand(1,100),
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $message = Message::find($id);

        echo $message->content;
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
        // $message = Message::where('id',$id)
        //         ->update(['content' => "fuck u"]);

        $message = Message::find($id);
        $message->content="hello world";

        $message->save();

        
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
