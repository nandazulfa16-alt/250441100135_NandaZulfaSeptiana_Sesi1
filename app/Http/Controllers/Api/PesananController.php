<?php

namespace App\Http\Controllers\Api;
use App\Models\Pesanan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index (Request $request)
    {
        $query = Pesanan::with('Layanan');    
    }
}
