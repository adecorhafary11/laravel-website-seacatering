<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::latest()->paginate(9);
        return view('testimonials.index', compact('testimonials'));
    }

    public function store(Request $request) {
        $request->validate([
            'customer_name' => 'required|max:255',
            'message' => 'required',
            'rating' => 'required|integer|between:1,5'
        ]);

        Testimonial::create($request->all());

        return back()->with('success', 'Testimonial berhasil dikirim');
    }
}