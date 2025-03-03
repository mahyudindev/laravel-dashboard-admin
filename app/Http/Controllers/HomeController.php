<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cuti;

class HomeController extends Controller
{
    public function index()
    {
        $totalKaryawan = User::count(); // Menghitung total karyawan
        // $pending = Cuti::where('status', 'Pending')->count(); // Menghitung status Pending
        // $approved = Cuti::where('status', 'Approved')->count(); // Menghitung status Approved
        // $rejected = Cuti::where('status', 'Rejected')->count(); // Menghitung status Rejected

        return view('admin.dashboard');
    }
}