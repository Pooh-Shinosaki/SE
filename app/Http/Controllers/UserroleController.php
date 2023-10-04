<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserroleController extends Controller
{
    //
    function index(){
        $roles = [
            ['type' => 'อาจารย์','name' => ['Jakkrit']],
            ['type' => 'ทีเอ','name' => ['Ohm','Friend',]],
            ['type' => 'นักเรียน','name' => ['Sky']]
        ];
        $test = "TEST!!";
        return view('roles',compact('roles','test'));
    }
    public function testimport(){
        $userone = new User;
        $userone->name = 'Sittiphum';
        $userone->email = 'Sittiphum.b@kkumail.com';
        $userone->password = Hash::make('wordpass');
        $userone->save();

    }
    public function importuser(){
        $users = array(
            array(
                "name" => "John",
                "email" => "john@gmail.com"
            ),
            array(
                "name" => "Jane",
                "email" => "jane@gmail.com"
            ),
            array(
                "name" => "OME",
                "email" => "OME@gmail.com"
            ),
            array(
                "name" => " Smith",
                "email" => "Smith@gmail.com"
            ),
            array(
                "name" => " Doe",
                "email" => "Doe@gmail.com"
            )
            // Add more users as needed
        );

        // foreach ($users as $U) {
        //     $user = new User;
        //     $user->name =  $U["name"];
        //     $user->email =  $U["email"];
        //     $user->password = Hash::make('wordpass');
        //     $user->save();
        // }
        $US = User::all();
            return view('importuser', compact('US'));
    }
}
