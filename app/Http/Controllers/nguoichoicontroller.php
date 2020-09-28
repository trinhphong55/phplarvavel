<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nguoichoi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\hash;

class nguoichoicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoichoi = DB::table('nguoichoi')->where('xoa', '=', 1)->get();
          return view('nguoichoi/danhsachnguoichoi',compact('nguoichoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nguoichoi/themnguoichoi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoichoi = new nguoichoi;
        $nguoichoi->tendangnhap =$request->tennguoichoi;
        $nguoichoi->matkhau =$request->matkhau;
        $nguoichoi->email =$request->emaill;
        $nguoichoi->hinhdaidien =$request->hinhdaidien;
        $nguoichoi->diemcaonhat =$request->diemcaonhat;
        $nguoichoi->save();
        return redirect('nguoichoi/nguoichoi')->with('<script>alert("Them thanh cong!)</script>');
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

        $nguoichoi = nguoichoi::findOrFail($id);
         $pageName = 'nguoichoi - Update';
     return view('nguoichoi/suanguoichoi',compact('nguoichoi','pageName'));
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
        //
        $nguoichoi = nguoichoi::find($id);
      
        $nguoichoi->hinhdaidien =$request->hinhdaidien;
       
        $nguoichoi->save();
         return redirect()->action('nguoichoicontroller@index');
    
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
        // $nguoichoi = nguoichoi::find($id);
        // $nguoichoi->delete();
        // return redirect()->action('linhvuccontroller@index')->with('success','Dữ liệu xóa thành công.');

         $nguoichoi = nguoichoi::find($id);
        // $linhvuc->delete();
        // return redirect()->action('linhvuccontroller@index')->with('drop','    ');
        DB::table('nguoichoi') ->where('id', $id)->update(['xoa' => 0]);
        return redirect()->action('nguoichoicontroller@index')->with('drop','    ');
    }
       public function nckhoa()
    {
         $nguoichoip = DB::table('nguoichoi')->where('xoa', '=', 0)->get();
           return view('nguoichoi/taikhoankhoanguoichoi',compact('nguoichoip'));
    }
     public function mokhoa($id)
    {
        $nguoichoip = nguoichoi::find($id);
          DB::table('nguoichoi') ->where('id', $id)->update(['xoa' => 1]);
           return redirect()->action('nguoichoicontroller@nckhoa')->with('hoiphuc','    ');
    }

}
