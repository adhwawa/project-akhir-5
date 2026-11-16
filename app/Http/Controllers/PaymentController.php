<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function qris()
    {
        $data = [
            'nama_pemesan' => 'Riska',
            'nomor_meja' => 'Meja 03 (Dine-in)',
            'nomor_order' => 'DC-8842',
            'nmid' => 'ID10200492817',
            'total' => 85000,
            'menu' => 'Grill Chicken Steak',
            'status' => 'Lunas Terverifikasi',
        ];

        return view('payment.qris', compact('data'));
    }
}