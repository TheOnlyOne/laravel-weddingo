<?php

namespace App\Http\Controllers\master_home;

use App\User;
use App\Http\Controllers\Controller;
use App\WeddingManager;
use Response;
use Illuminate\Support\Facades\Input;
use Request;
use Illuminate\Support\Facades\Session;
use Validator;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master-home-view.register');
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
    public function store(Request $request) {
        $validator = Validator::make
        (
          array(
              'name' => Request::get('name'),
              'email' => Request::get('email'),
              'phone_number' => Request::get('phone_number'),
              'password' => Request::get('password'),
              'retypepass' => Request::get('retypepass'),
          ), array(
              'name' => 'required|max:20',
              'phone_number' => 'required|digits:10|unique:users,phone_number',
              'email' => 'required|max:30|email|unique:users,email',
              'password' => 'required|min:6',
              'retypepass' => 'same:password'
        ));

        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $user = new User();
        $user->name = Request::get("name");
        $user->email = Request::get("email");
        $user->phone_number = Request::get("phone_number");
        $user->password = Request::get("password");
        $user->save();
        return Response::json([
            'success' => true,
            'errors' => null,
        ]);
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
