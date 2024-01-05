<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $contactUs = ContactUs::all();
        return view('admin.contactUs.index', compact('contactUs', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $user = User::where('id', auth()->user()->id)->first();
        // dd($users);
        return view('user.contactUs.index', compact('user'));
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $request->merge([
            'user_id' => auth()->user()->id,
        ]);

        ContactUs::create($request->all());
        return redirect()->route('contactUs.create')->with('success', 'Your message has been sent. Thank you!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
