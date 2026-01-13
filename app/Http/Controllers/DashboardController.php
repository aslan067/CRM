<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'CRM Dashboard',
            'subtitle' => 'Şirket genel görünümü ve operasyonel özetler.',
            'stats' => [
                ['label' => 'Aktif Müşteri', 'value' => '128', 'trend' => '+8%'],
                ['label' => 'Açık Teklif', 'value' => '34', 'trend' => '+12%'],
                ['label' => 'Bu Ay Satış', 'value' => '₺1.2M', 'trend' => '+5%'],
                ['label' => 'Bekleyen Tahsilat', 'value' => '₺420K', 'trend' => '-3%'],
            ],
            'activities' => [
                ['title' => 'Yeni teklif oluşturuldu', 'meta' => 'ACME / #T-2048 · 2 saat önce'],
                ['title' => 'Satış onayı alındı', 'meta' => 'Nova Enerji / #S-1102 · 5 saat önce'],
                ['title' => 'Stok seviyeleri güncellendi', 'meta' => 'Merkez Depo · 1 gün önce'],
            ],
            'tasks' => [
                ['name' => 'Tedarikçi sözleşmesi yenile', 'due' => 'Bugün', 'status' => 'Öncelikli'],
                ['name' => 'KDV raporu kontrolü', 'due' => 'Yarın', 'status' => 'Planlandı'],
                ['name' => 'Satış ekibi haftalık toplantı', 'due' => 'Cuma', 'status' => 'Takipte'],
            ],
        ]);
    }
}
