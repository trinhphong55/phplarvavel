<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DangnhapRequest;
class quantriviencontroller extends Controller
{
    protected $redirectTo ='linhvuc';
    public function dangnhap() {
       
    	return view('dangnhap');
    }
    public function xulidangnhap(DangnhapRequest  $request)
    {
    	$tendangnhap = $request->tendangnhap;
    	$matkhau = $request->matkhau;

    	// $qtv =  quantrivien::where('tendangnhap',$tendangnhap)->first();
    	 if(Auth::attempt(['tendangnhap'=>$tendangnhap, 'password'=>$matkhau]))
    	 {
    	 	return view('layout')->with('thanhcong','   ');
    	 }
         else
         {
    	 return redirect('login')->with('thatbai','   ') ;
        }

    }
    public function laythongtin()
    {
        return Auth::id();
    }

      public function dangxuat()
    {

        Auth::logout();
        return redirect()->route('dangxuat');
    }
    public function index()
    {
        $qtv = DB::table('quantrivien')->get();
        return view('quantrivien/danhsachquantrivien',compact('qtv'));
    }
}

