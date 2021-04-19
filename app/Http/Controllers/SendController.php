<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\FormEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SendController extends Controller
{
    // public function index()
    // {
    //     return view('Contact');
    // }
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Мухаммедали Хамзаев';
        $objDemo->receiverMessage = 'Мухаммедали Хамзаев';
       
        // $data = array(
        //     'contactName' => $request->contactName,
        //     'contactEmail' => $request->contactEmail,
        //     'contactSubject' => $request->contactSubject,
        //     'contactMessage' => $request->contactMessage,
        //     'contactSurname'=>$request->contactSurname,
        //     'contactAddress'=>$request->contactAddress,
        //     'contactPhone'=>$request->contactPhone,
        //     'contactOccupation'=>$request->contactOccupation,
        //     'contactImage' =>$request->contactImage

        // );
        Mail::to("muhammedalikhamzaev@gmail.com")->send(new FormEmail($objDemo));
        return view('contact');
    }
    // function sendTest(Request $request)
    // {   
    //         $this->valiedate($request,[
    //             'contactName' => 'required',
    //             'contactEmail'=> 'required|email',
    //             'contactSubject'=>'required',
    //             'contactMessage'=>'required'
    //         ]);
    // }
}
