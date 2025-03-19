<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display the landing page with featured products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $featuredProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $allProducts = Product::all()->groupBy('category');
        $whatsappNumber = env('WHATSAPP_NUMBER');

        return view('LandingPage.index', compact('featuredProducts', 'allProducts', 'whatsappNumber'));
    }

}
