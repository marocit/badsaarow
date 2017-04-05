<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Registration::all();
        $answer1 = Registration::answer1()->get()->count();
        $answer2 = Registration::answer2()->get()->count();
        $answer3 = Registration::answer3()->get()->count();
        $answer4 = Registration::answer4()->get()->count();
        $answer5 = Registration::answer5()->get()->count();

        $select1 = Registration::answer1()->get();
        $select2 = Registration::answer2()->get();
        $select3 = Registration::answer3()->get();
        $select4 = Registration::answer4()->get();
        $select5 = Registration::answer5()->get();

        return view('admin.index', compact('users', 'answer1', 'answer2', 'answer3', 'answer4','answer5', 'select2', 'select1', 'select3', 'select4', 'select5'));
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
