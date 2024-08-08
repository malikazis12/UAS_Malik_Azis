<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $dashboard = Dashboard::all();
        return view('dashboard.index',compact('nomor','dashboard'));
    }
}
