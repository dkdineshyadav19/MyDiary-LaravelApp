<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CreateDiaryController extends Controller
{
    
    public function adddiary( )
    {
     return view('add-diary');
    }

   public function storediary(Request $request )
    {      
        $request->validate([
            'title'=>'required |max:50',
            'story'=>'required |max:200'
    ]);
            $member_obj = new member();
            $member_obj ->title=$request->title;
            $member_obj ->story=$request->story;  
            $member_obj ->save();             
            return redirect('showpublic');
    }
    
  

}
