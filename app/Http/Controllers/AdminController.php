<?php



namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $users = User::withCount('subscriptions')->paginate(10);
        $subscriptions = Subscription::latest()->paginate(10);
        
        return view('admin.dashboard', compact('users', 'subscriptions'));
    }

    public function editUser(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'is_admin' => 'boolean'
        ]);

        $user->update($request->only('full_name', 'email', 'is_admin'));

        return redirect()->route('admin.dashboard')
            ->with('success', 'User berhasil diperbarui');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.dashboard')
            ->with('success', 'User berhasil dihapus');
    }
}