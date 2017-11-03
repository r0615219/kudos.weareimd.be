<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Compliment;

class ComplimentsController extends Controller
{
    public function received() {
        return view('compliments.received');
    }

    public function given() {
        return view('compliments.given');
    }

    public function index() {

        $posts = Compliment::latest()->get();

        $user = new User;

        return view('home.index', compact('posts', 'id_from'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {

        //$user = User::find($id);

        return view('users.user', compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        //
    }*/

    public function store(User $user)
    {
        $this->validate(request(), [
            'body' => 'required|min:2'
        ]);

        $user->addCompliment(request('body'));

        /*Compliment::create([
            'body' => request('body'),
            'id_from' => 3,
            'user_id' => $user->id
        ]);*/

        return redirect('/users/' . $user->id );

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
