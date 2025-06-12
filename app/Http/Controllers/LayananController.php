<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LayananController extends Controller
{
      public function index()
    {
        $timezone = 'Asia/Jakarta';
        $startDate = Carbon::now($timezone)->startOfDay();
        $quotaPerDay = 7;

        $dates = [];
        for ($i = 0; $i < 7; $i++) {
            $date = $startDate->copy()->addDays($i);
            $count = Reservasi::whereDate('jadwal_reservasi', $date)->count();

            $available = $quotaPerDay - $count;
            if ($available < 0) $available = 0;

            $status = $available > 0 ? 'Tersedia' : 'Penuh';

            $dates[] = [
                'tanggal' => $date->format('Y-m-d'),
                'available' => $available,
                'status' => $status,
            ];
        }

        return view('user.layanan', compact('dates'));
    }
}
