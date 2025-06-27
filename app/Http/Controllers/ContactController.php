<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Menampilkan halaman contact
    public function index() {
        return view('contact');
    }

    //menyimpan data contact
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:20',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact')
        ->with('success', 'Pesan anda berhasil dikirim!');
    }
}