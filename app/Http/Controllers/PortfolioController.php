<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        return view('portfolio.home', [
            'user' => auth()->user()
        ]);
    }

    public function myPortfolios()
    {
        return view('portfolio.my-portfolios');
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function editor()
    {
        return view('portfolio.editor');
    }
}
