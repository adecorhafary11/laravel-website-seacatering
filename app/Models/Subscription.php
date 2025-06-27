<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'package',
        'meal_types',
        'delivery_days',
        'allergies',
        'total_price'
    ];

    protected $casts = [
        'meal_types' => 'array',
        'delivery_days' => 'array',
    ];

    // Konstanta harga paket
    const PACKAGE_PRICES = [
        'diet' => 30000,
        'protein' => 40000,
        'royal' => 60000
    ];

    // Konstanta hari
    const DAYS = [
        'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'
    ];

     // Konstanta jenis makanan
    const MEAL_TYPES = [
        'sarapan', 'makan_siang', 'makan_malam'
    ];

    // Hitung total harga
    public static function calculatePrice($package, $mealTypes, $deliveryDays)
    {
        $pricePerMeal = self::PACKAGE_PRICES[$package] ?? 0;
        $mealCount = count($mealTypes);
        $dayCount = count($deliveryDays);
        
        return $pricePerMeal * $mealCount * $dayCount * 4.3;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}