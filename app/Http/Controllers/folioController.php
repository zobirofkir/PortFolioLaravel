<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folio;
use App\Notifications\ContactFormNotification;
use Illuminate\Support\Facades\Notification;

class folioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("template.folio");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("template.folio");
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             "username" => "required",
             "email" => "required",
             "phone" => "required",
             "message" => "required"
         ]);
     
         $postContact = new Folio();
         $postContact->username = $request->input("username");
         $postContact->email = $request->input("email");
         $postContact->phone = $request->input("phone");
         $postContact->message = $request->input("message");
     
         $postContact->save();  
             // Notify by email
        Notification::route('mail', 'zobirofkir30@gmail.com') // Replace with the recipient's email address
        ->notify(new ContactFormNotification($postContact));   
         return redirect("/");
     }
         

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
