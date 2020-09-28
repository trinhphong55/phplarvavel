<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\goicredit;
class creditcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $credit = DB::table('goicredit')->get();
          return view('goicredit/credit',compact('credit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goicredit/themcredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $creditt = DB::table('goicredit')->get();
       $goicredit = new goicredit;
        
        $goicredit->tengoi = $request->tengoi;
        $goicredit->credit = $request->themCredit;
        $goicredit->sotien= $request->sotien;
        
        if($goicredit->tengoi=='' || $goicredit->credit ==''||$goicredit->sotien=='')
        {
             return redirect('credit/themcredit')->with('chong','  ');
        }
        else{
            foreach ($creditt as $table)
            {
                if ($request->tengoi == $table->tengoi)
                {
                    return redirect('credit/themcredit')->with('trung','  ');
                }
            }
        }


       $goicredit->save();
      
      

         return redirect('credit/credit')->with('them','  ');
        
        
        
    
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
         $goicredit = goicredit::findOrFail($id);
         $pageName = 'goicredit - Update';

     return view('goicredit/suacredit',compact('goicredit','pageName'));
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
           $goicredit = goicredit::find($id);
     
        $creditt = DB::table('goicredit')->get();
     
        
        $goicredit->tengoi = $request->tengoi;
        $goicredit->credit = $request->themCredit;
        $goicredit->sotien= $request->sotien;
        
        if($goicredit->tengoi=='' || $goicredit->credit ==''||$goicredit->sotien=='')
        {
             return redirect()->action('creditcontroller@index')->with('chong','');
        }
        else{
            foreach ($creditt as $table)
            {
                if ($request->tengoi == $table->tengoi)
                {
                    return redirect()->action('creditcontroller@index')->with('trung','  ');
                }
            }
        }


       $goicredit->save();
       return redirect()->action('creditcontroller@index')->with('sua','  ');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goicredit = goicredit::find($id);
        $goicredit->delete();
         return redirect()->action('creditcontroller@index')->with('xoa','    ');
    }
}
