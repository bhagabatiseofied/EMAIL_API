<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    $templates = Template::all();
    return response()->json([
        'templates' => $templates
    ]);


    }



    /**
     * Sent Email to User 
     */
    public function sendmail(Request $request)
    {
        //


       $template = Template::where('id',$request->tempid)->first();

       $mail_temp = $template->mailtemplate;

       $user = User::where('id',$request->userid)->first();
       $user_mail = $user->email;
    
       return response()->json([
        'message' => "Api Fetched successfully!",
        'usermail' => $user_mail,
        'mailtemp' => $mail_temp,
    ], 200);


        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {
        //
    }
}
