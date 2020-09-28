<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\linhvuc;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\linhvucRequest;
use Illuminate\Validatio\Validator;

class linhvuccontroller extends Controller
{
     protected $redirectTo ='linhvuc';
    public function linhvuc() {
       
        return view('linhvuc/linhvuc');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $linhvucsl = DB::table('linh_vuc')->where('xoa', '=', 1)->get();

          return view('linhvuc/danhsachlinhvuc',compact('linhvucsl'));
          


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linhvuc/themmoilinhvuc');
         return view('cauhoi/themcauhoi');
         return view('cauhoi/suacauhoi');
         
        

        
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(linhvucRequest $request)
    {
      
    
    
         
         $validate  = $request->validate([
         'tenlinhvuc' => 'unique:linh_vuc,tenlinhvuc'
         ],
         [
            'tenlinhvuc.unique' => 'Tên Lĩnh Vực Đã Có'
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
           $linhvuc = linhvuc::findOrFail($id);
         $pageName = 'linhvuc - Update';

     return view('linhvuc/sualinhvuc',compact('linhvuc','pageName'));

        
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
         'tenlinhvuc' => 'unique:linh_vuc,tenlinhvuc',
         'tenlinhvuc' => 'required'
         ],
         [
            'tenlinhvuc.unique' => 'Tên Lĩnh Vực Đã Có',
            'tenlinhvuc.required' => 'Tên Lĩnh Vực không được để trống'
         ]
       
     );


       $linhvuc = linhvuc::find($id);
       $linhvuc->tenlinhvuc = $request->tenlinhvuc;
       $linhvucsl = DB::table('linh_vuc')->get();
       $linhvuc->save();
       return redirect()->action('linhvuccontroller@index')->with('sua','  ');

   
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $linhvuc = linhvuc::find($id);
        // $linhvuc->delete();
        // return redirect()->action('linhvuccontroller@index')->with('drop','    ');
        DB::table('linh_vuc') ->where('id', $id)->update(['xoa' => 0]);
        return redirect()->action('linhvuccontroller@index')->with('drop','    ');
            
     }

      public function thungrac()
    {
         $linhvuctg = DB::table('linh_vuc')->where('xoa', '=', 0)->get();
          return view('linhvuc/thungraclinhvuc',compact('linhvuctg'));


       
    }
     public function xoavinhvien($id)
    {
        
        $linhvuc = linhvuc::find($id);
        $linhvuc->delete();
         return redirect()->action('linhvuccontroller@thungrac')->with('xoa','    ');
        
            
     }

    public function khoiphuc($id)
    {
        
        $linhvuc = linhvuc::find($id);
        DB::table('linh_vuc') ->where('id', $id)->update(['xoa' => 1]);
        return redirect()->action('linhvuccontroller@thungrac')->with('hoiphuc','    ');
        

    }
    public function idcauhoi()
    {

         $wcauhoi = DB::table('linh_vuc')->get();
         return view('cauhoi/themcauhoi',compact('wcauhoi'));


   }

  
}
