<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Usr;

class LoginController extends Controller {
    public function registration(LoginRequest $req) {
        // $validation = $req->validate([
        //     'name' => 'required|max:100',
        //     'surname' => 'required|max:100',
        //     'email' => 'required|email|min:6|max:200',
        //     'password' => 'required|min:6|max:200'
        // ]);

        $user = new Usr();
        $user->name = $req->input('name');
        $user->surname = $req->input('surname');
        $user->email = $req->input('email');
        $user->password = $req->input('password');

        $pic = $req->input('picture_url');
        if ($pic != null and $pic != '') {
            $user->picture_url = $pic;
        } else {
            $user->picture_url = 'https://iupac.org/wp-content/uploads/2018/05/default-avatar.png';
        }
        $user->role = 'student';

        $user->save();
        return redirect()->route('login')->with('success', 'User was registered');
    }

    public function login(Request $req){
        $data = $req->input();

        $db = new DbController();
        $user = $db->getUserByEmail($data['email']);

        if($user!=null && $user['password' ] == $data['password']){
            echo "hi";
            $req->session()->put('currentUser', $user);
            return redirect()->route('home')->with('success', "Welcome back ".$user->name);
        }
        return redirect()->route('login')->with('fail', 'Invalid email or password!');
    }
    // public function logout()
}
