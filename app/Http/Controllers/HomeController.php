<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    $testimonials = Testimonial::latest()->take(3)->get();
    return view('home', compact('testimonials'));
}
}