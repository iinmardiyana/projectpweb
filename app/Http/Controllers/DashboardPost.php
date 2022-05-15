<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postl;

class DashboardPost extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            "title" => "dashboardindex",
            "postl" => postl::all() #bikin function model
        ]);
    }

    public function show(postl $postl)
    {
        return view('dashboard.spdash', [
            "title" => "Single Post",
            "postl" => $postl
        ]);
    }
}
