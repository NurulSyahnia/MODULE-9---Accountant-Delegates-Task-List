<?php

namespace App\Http\Controllers;

use Request;

use App\curd;

use App\acc;

use App\account;

use App\file;

use DB;

class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = curd::all();
        return view("read", compact("user"));

        $user1 = acc::all();
        return view("read", compact("user1"));
    }

    public function index1()
    {
        $acco = account::all();
        return view("accounting", compact("acco"));
    }

    public function index2()
    {
        $fil = file::all();
        return view("filing", compact("fil"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        curd::create(Request::all());

        acc::create(Request::all());

        account::create(Request::all());

        return redirect("index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= curd::find($id);
        return view("update", compact("user"));
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
        $user = curd::find($id);
         $user->update(Request::all());
         return redirect("index");
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
