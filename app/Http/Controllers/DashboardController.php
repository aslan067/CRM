<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'CRM',
            'subtitle' => 'Laravel ve MySQL ile temel iskelet hazir.',
        ]);
    }
}
