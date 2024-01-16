<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsroom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function managerDashboard()
    {
        return view('manager_dashboard');
    }

    public function adminIndex()
    {
        return view('admin.dashboard');
    }
    public function newsroom()
    {
        $newsrooms = Newsroom::all();
        return view('newsroom',compact('newsrooms'));
    }
}
