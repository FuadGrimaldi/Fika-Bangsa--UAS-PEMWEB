<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
class PricingController extends Controller
{
    public function index() {
        $standardPackage = Package::where('name', 'standard')->first();
        $premiumPackage = Package::where('name', 'premium')->first();
        return view('member.pricing', [
            'standard' => $standardPackage,
            'premium' => $premiumPackage
        ]);
    }
    public function finish() {
        return view('member.payment-finish');
    }
}
