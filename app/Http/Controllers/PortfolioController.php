<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller // Убедитесь, что есть это наследование
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
{
    $portfolios = Portfolio::with('user')->latest()->paginate(12);
    return view('portfolio.index', compact('portfolios'));
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
