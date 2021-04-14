<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class show extends Controller
{
    public function showdata()
    {
       $data = member::all()->sortByDesc('created_at');
        return view('showpublic',['members'=>$data]);
    }
}
