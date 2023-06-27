<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Pelanggan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index(User $user, Pelanggan $pelanggan, Domain $domain, Request $request)
    {
        $totalDomain = $domain::count();
        $totalUser = $user::count() - 1;
        $totalPelanggan = $pelanggan::count();
        return view('dashboard', compact('totalDomain', 'totalUser', 'totalPelanggan'));
    }
}
