<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'CRM Giriş',
            'subtitle' => 'Kurumsal CRM platformuna güvenli giriş yapın.',
            'sampleUsers' => [
                [
                    'role' => 'Super Admin',
                    'email' => 'superadmin@crm.local',
                    'password' => 'SuperAdmin!2024',
                    'company' => 'CRM Sistem Sahibi',
                ],
                [
                    'role' => 'Company Admin',
                    'email' => 'admin@acme.local',
                    'password' => 'CompanyAdmin!2024',
                    'company' => 'Acme Teknoloji A.Ş.',
                ],
            ],
        ]);
    }
}
