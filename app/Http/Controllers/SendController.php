<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use App\Mail\FormEmail;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Мухаммедали Хамзаев';
        $objDemo->receiver = 'Мухаммедали Хамзаев';
        Mail::to("muhammedalikhamzaev@gmail.com")->send(new FormEmail($objDemo));
    }
}
