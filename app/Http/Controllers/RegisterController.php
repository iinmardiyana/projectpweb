<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
       return view('register.index',[
           'title' => 'Register',
           'active' => 'register'
       ]); 
    }

    public function store(Request $request){
        // mengambil semua request yang ada
        // Digunakan teknik CSRF teknik serangan ke website dimana serangan ini memasulkan 
        // request dari website lain (istilahnya membajak) 
        // Sebelum menggunakan validate 
        // return $request()->all();
        // Setelah menggunakan validate
        $validateData=$request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:5','max:100','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:50'

        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        // atau bisa menggunakan metode has seperti berikut
        // $validateData['password']= Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success','Registration successfull! Please Login');
        return redirect('/login')->with('success','Registration successfull! Please Login');
    }
}
