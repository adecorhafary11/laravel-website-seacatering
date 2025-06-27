<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class SubscriptionController extends Controller
{
    //  public function __construct()
    //  {
    //     $this->middlewere('auth');
    //  }
    use AuthorizesRequests;

    public function create()
    {
        return view('subscription.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|regex:/^[0-9]{9,15}$/',
            'package' => 'required|in:diet,protein,royal',
            'meal_types' => 'required|array|min:1',
            'meal_types.*' => 'in:sarapan,makan_siang,makan_malam',
            'delivery_days' => 'required|array|min:1',
            'delivery_days.*' => 'in:senin,selasa,rabu,kamis,jumat,sabtu,minggu',
            'allergies' => 'nullable|string|max:500'
        ]);

        // Sanitize input
        $validated['allergies'] = strip_tags($validated['allergies']);

        // Hitung total harga
        $totalPrice = Subscription::calculatePrice(
            $validated['package'],
            $validated['meal_types'],
            $validated['delivery_days']
        );

        $subscription = $request->user()->subscriptions()->create([
            'phone' => $validated['phone'],
            'package' => $validated['package'],
            'meal_types' => $validated['meal_types'],
            'delivery_days' => $validated['delivery_days'],
            'allergies' => $validated['allergies'] ?? null,
            'total_price' => $totalPrice
        ]);

        return redirect()->route('subscription.confirmation', $subscription);
    }

    public function confirmation(Subscription $subscription)
    {
       $this->authorize('viewConfirmation', $subscription);
    
    // Eager load user relation
    $subscription->load('user');
    
    return view('subscription.confirmation', compact('subscription'));
    }
}