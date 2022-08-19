<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
   public function store(Request $request)
   {
    $data = $request->all();
        
    Mail::to(config('mail.from.address') )->send( new SendEmailContact($data));
    
    return redirect()->route('welcome')->with('success', 'Obrigado por nos contatar :}');
   }
}
