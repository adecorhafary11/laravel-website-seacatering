<?php

namespace App\Policies;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscriptionPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Subscription $subscription)
    {
        return $user->id === $subscription->user_id || $user->is_admin;
        
    }

    public function update(User $user, Subscription $subscription)
    {
        return $user->id === $subscription->user_id || $user->is_admin;
    }

    public function delete(User $user, Subscription $subscription)
    {
        return $user->is_admin;
    }

    public function viewConfirmation(User $user, Subscription $subscription)
{
    // Izinkan akses konfirmasi tanpa verifikasi email
    return $user->id === $subscription->user_id;
}

    
}