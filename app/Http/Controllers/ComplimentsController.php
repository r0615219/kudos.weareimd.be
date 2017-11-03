<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Compliment;

class ComplimentsController extends Controller
{
    public function received() {

        $loggedin_id = 1;

        $posts = Compliment::All()->where('user_id', $loggedin_id);

        return view('compliments.received', compact('posts'));
    }

    public function given() {

        $loggedin_id = 1;

        $posts = Compliment::All()->where('id_from', $loggedin_id);

        return view('compliments.given', compact('posts'));
    }

    public function index() {

        $posts = Compliment::latest()->get();

        //$loggedinuser = Auth::user();

        //dd($loggedinuser);

        return view('home.index', compact('posts'));
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
