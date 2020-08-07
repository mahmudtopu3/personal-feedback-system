<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

use Picqer;
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


    public function barcode()
    {
        $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
        $code = $generatorPNG->getBarcode('081231723897', $generatorPNG::TYPE_CODE_128);
     //   dd(base64_encode($code));
        return view('barcode',compact('code'));
    }


    public function barcodeSubmit(Request $request)
    {
        //dd($request->code);

        $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
        $code = base64_encode($generatorPNG->getBarcode($request->code, $generatorPNG::TYPE_CODE_128));
      
        return response()->json([
            'code'   => $code,
            'input' => $request->code,
            
         
           ]);
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
