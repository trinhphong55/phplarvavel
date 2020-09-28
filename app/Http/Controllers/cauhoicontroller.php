<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\cauhoi;

class cauhoicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cauhoi = DB::table('cau_hoi')->where('xoa', '=', 1)->get();
          return view('cauhoi/danhsachcauhoi')->with('cauhoi',$cauhoi);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cauhoi/themcauhoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
   
         $validate  = $request->validate([
         'cauhoi' => 'required',
         'dapana' => 'required',
         'dapanb' => 'required',
         'dapanc' => 'required',
         'dapand' => 'required',
         'dapan' => 'required'

         ],
         [
            'cauhoi.required'=>' Câu Hỏi Không Được để trống',
            'dapana.required'=>' Đáp Án A Không Được để trống',
            'dapanb.required'=>' Đáp Án B Không Được để trống',
            'dapanc.required'=>' Đáp Án C Không Được để trống',
            'dapand.required'=>' Đáp Án D Không Được để trống',
            'dapan.required'=>' Đáp Án  Không Được để trống'
        
         ]
       
     );
            
         // if($validate->fails())
         // // {
         //    $erro = $validate->erro();
         //   return redirect('linhvuc/themoi')->with('them','  ');
         // }
         // else
         // {
  
        $linhvuc = new linhvuc;
        $linhvucsl = DB::table('linh_vuc')->get();
        $linhvuc->tenlinhvuc = $request->tenlinhvuc;
           $linhvuc->save(); 
           return redirect('linhvuc/linhvuc')->with('them','  ');

          $cauhoi = new cauhoi;
        $cauhoi->noidung =$request->cauhoi;
        $cauhoi->linh_vuc_id =$request->idcauhoi;
        $cauhoi->phuongan_a =$request->dapana;
        $cauhoi->phuongan_b =$request->dapanb;
        $cauhoi->phuongan_c =$request->dapanc;
        $cauhoi->phuongan_d =$request->dapand;
        $cauhoi->dapan =$request->dapan;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cauhoii = DB::table('linh_vuc')->get();
        $cauhoi = cauhoi::findOrFail($id);
         $pageName = 'cauhoi - Update';
     return view('cauhoi/suacauhoi',compact('cauhoii','cauhoi','pageName'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validate  = $request->validate([
         'cauhoi' => 'required',
         'dapana' => 'required',
         'dapanb' => 'required',
         'dapanc' => 'required',
         'dapand' => 'required',
         'dapan' => 'required'

         ],
         [
            'cauhoi.required'=>' Câu Hỏi Không Được để trống',
            'dapana.required'=>' Đáp Án A Không Được để trống',
            'dapanb.required'=>' Đáp Án B Không Được để trống',
            'dapanc.required'=>' Đáp Án C Không Được để trống',
            'dapand.required'=>' Đáp Án D Không Được để trống',
            'dapan.required'=>' Đáp Án  Không Được để trống'
        
         ]
       
     );
        $cauhoi = cauhoi::find($id);
        $cauhoi->noidung =$request->cauhoi;
        $cauhoi->linh_vuc_id =$request->idcauhoi;
        $cauhoi->phuongan_a =$request->dapana;
        $cauhoi->phuongan_b =$request->dapanb;
        $cauhoi->phuongan_c =$request->dapanc;
        $cauhoi->phuongan_d =$request->dapand;
        $cauhoi->dapan =$request->dapan;
         $cauhoi->save();
         return redirect()->action('cauhoicontroller@index')->with('sua', '    ');
     }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //   $cauhoi = cauhoi::find($id);
        // $cauhoi->delete();
        // return redirect()->action('cauhoicontroller@index')->with('success','Dữ liệu xóa ');
          $cauhoi = cauhoi::find($id);
        // $linhvuc->delete();
        // return redirect()->action('linhvuccontroller@index')->with('drop','    ');
        DB::table('cau_hoi') ->where('id', $id)->update(['xoa' => 0]);
        return redirect()->action('cauhoicontroller@index')->with('drop','    ');
    }


         public function thungrac()
    {
         $cauhoitg = DB::table('cau_hoi')->where('xoa', '=', 0)->get();
          return view('cauhoi/thungraccauhoi',compact('cauhoitg'));


       
    }
     public function xoavinhvien($id)
    {
        
        $cauhoitg = cauhoi::find($id);
        $cauhoitg->delete();
         return redirect()->action('cauhoicontroller@thungrac')->with('xoa','    ');
        
            
     }

    public function khoiphuc($id)
    {
        
        $cauhoitg = cauhoi::find($id);
        DB::table('cau_hoi') ->where('id', $id)->update(['xoa' => 1]);
        return redirect()->action('cauhoicontroller@thungrac')->with('hoiphuc','    ');
        
            
     }
 

}
