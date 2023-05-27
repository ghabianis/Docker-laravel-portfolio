<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\portfolios;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function submit(Request $request)
    {
        $portfo = new portfolios;
        $portfo->name = $request->input('name');
        $portfo->email = $request->input('email');
        $portfo->message = $request->input('message');
        $portfo->save();
        $details = [
            'title' => $portfo->name,
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to($portfo->email)->send(new \App\Mail\MyTestMail($details));
       
        
        // Process the submitted data, such as saving to the database or performing other actions

        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}
