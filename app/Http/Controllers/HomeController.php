<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showMessagesForm()
    {
        return view('user');
    }

    public function SubmitMessage(Request $request)

    {

        request()->validate([

            'subject' => 'required|string',

            'description' => 'required|string',

        ]);



        Message::create($request->all());



        return redirect()->route('userpage')

                        ->with('success','Message Is Sent Successfully.');

    }

}
