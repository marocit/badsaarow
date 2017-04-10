<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Registration;
use App\Answer;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterEmail;
use App\Mail\EmailAgain;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $select =  Answer::pluck('answer','id')->all(); 
       // $select->prepend('None', 0);
        $registrations = Registration::all();
        return view('registration.index' , compact('registrations', 'select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contact()
    {
        return view('registration.contact');
    }
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
    public function store(RegisterRequest $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'slug' => 'required|unique:posts',
        //     'body' => 'required',
        //     'published_at' => 'date_format:Y-m-d H:i:s',
        //     'category_id' => 'required'

        // ]);
       // $data = $this->handleRequest($request);
        //$request->user()->posts()->create($data);
        // $input = $request->all();
        // $input['slug'] = str_slug($request->slug, ('-'));
        // $request->user()->posts()->create($input);
        //return $request;
        //return redirect(route('backend.blog.index'))->with('success', 'Your Post was created successfully' );

        $input = $request->all();
       // return $request->all();
        $register = Registration::create($input);
        //dd($request->old('answer-1'));
        //dd($input);
        Mail::to('cmaroska@marocit.de')->send(new EmailAgain($register));
        
        return redirect()->back()->with('success',  'Hallo ' . $input['name'] . ', ' . 'du hast dich erfolgreich registriert');

        
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
