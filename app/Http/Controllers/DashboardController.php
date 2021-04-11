<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function AdminDashboard()
    {
        return view('admin.dashboard.admin.dashboard');
    }


    public function HeadDashboard()
    {
        return view('admin.dashboard.head.dashboard');

    }


    public function LeadDashboard()
    {
        return view('admin.dashboard.lead.dashboard');
    }



}
