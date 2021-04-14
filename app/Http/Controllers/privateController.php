<?php

namespace App\Http\Controllers;
use App\Models\myprivate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sentinel;

class privateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adddiary( )
    {
        
       
     return view('addprivate');
    }
    public function storeprivatediary(Request $request )
    {
        $request->validate([
            'title'=>'required |max:50',
            'story'=>'required |max:200'
    ]);
        $currentemail = Auth::user()->email;
            $myprivate_obj = new myprivate();
            $myprivate_obj ->email=$currentemail;
            $myprivate_obj ->title=$request->title;
            $myprivate_obj ->story=$request->story;  
            $myprivate_obj ->save(); 
            return redirect('showprivate');         
    }
    public function showdata()
    {
        $currentemail = Auth::user()->email;
       $data = myprivate::all()->where('email',$currentemail)->sortByDesc('created_at');
        
        return view('showprivate',['myprivates'=>$data]);
    }
    public function deleteData($id)
    {
        $data=myprivate::find($id);
        $data->delete();
        return redirect('showprivate');
    }
    public function editData($id)
    {
        $data= myprivate::find($id);
        return view('editprivate',['data'=>$data]);
    }
    public function updateData(Request $request )
    {
        $request->validate([
            'title'=>'required |max:50',
            'story'=>'required |max:200'
    ]);
            $data=myprivate::find($request->id);
            $data->title=$request->title;
            $data->story=$request->story;
            $currentemail = Auth::user()->email;
            $data->email=$currentemail;
            $data->save();
            return redirect('showprivate');         
    }
}
