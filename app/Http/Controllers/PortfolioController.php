<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('portfolio.home', [
            'user' => auth()->user(), // Может быть null
            
        ]);

    }

}
