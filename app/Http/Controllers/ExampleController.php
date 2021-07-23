<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Example::paginate(4);
        $param = ['items' => $items, 'user' => $user];
        return view('index', $param);
    }


    public function getAuth(Request $request)
    {
        $text = ['text' => 'ログインしてください'];
        return view('example.auth', $text);
    }

    public function postAuth(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            $text = 'ログインしました。（' . Auth::user()->name . '）';
        } else {
            $text = 'ログインに失敗しました。';
        }
        // return view('example.auth', ['message' => $msg]);
        // return view('example.auth', ['text' => $text]);
        return view('dashboard');
    }
}
