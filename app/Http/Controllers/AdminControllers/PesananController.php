<?php   

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::all();

        return view('admin.pesanan.index', compact('pesanans'));
    }
}
