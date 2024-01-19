<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required'],
            'email'=>['required','unique:users,email,'],
            'cnic'=>['required','unique:users,cnic,'],
            'password'=>['required','confirmed'],
        ]);

        $date = [
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'cnic'=> $request->cnic,
        ];

        $its_created = User::create($date);

        if ($its_created){
            return back()->with(['success' =>" information is upload"]);
        }
        else{
            return back()->with(['failure'=>"information is failed"]);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
