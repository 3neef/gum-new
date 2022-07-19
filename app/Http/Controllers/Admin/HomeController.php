<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Phone;
use App\Models\Sale;
use App\Models\Swap;

class HomeController
{
    public function index()
    {
        $sells = Sale::where('operation', 'sell')->get();
        $buys = Sale::where('operation', 'buy')->get();
        $custmers = Customer::all();
        $new_phones = Phone::where('state','new')->get();
        $used_phones = Phone::where('state','second')->get();
        $swaps = Swap::all();


        $sales = Sale::with(['customer', 'phones'])->limit(5)->get();

        $customers = Customer::get();

        $phones = Phone::get();
        $p_d = Swap::all()->sum('price_diffrance');
        $revenu = Sale::all()->sum('total_price');
        $total_sr = Sale::where('operation', 'sell')->get()->sum('total_price');
        $total_br = Sale::where('operation', 'buy')->get()->sum('total_price');
        $total_rr = Sale::where('operation', 'repair')->get()->sum('total_price');
        // dd ($revenu);
        return view('home', compact(['total_rr','total_br','total_sr','revenu','p_d','phones','custmers','sales','sells','buys','customers','new_phones','used_phones','swaps']));
    }
}
