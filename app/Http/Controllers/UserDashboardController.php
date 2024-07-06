<?php

// app/Http/Controllers/UserDashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard'); // Tạo view user.dashboard
    }
}