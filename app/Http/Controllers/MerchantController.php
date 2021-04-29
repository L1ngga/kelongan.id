<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Merchant;
use Illuminate\Support\Facades\DB;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('merchant')
                        ->select('merchant.id', 'merchant.nama_merchant', 'merchant.address', 'merchant.id_users',
                                'users.name')
                        ->join('users', 'users.id', '=', 'merchant.id_users')
                        ->get();
        
        return view('Merchant.merchant', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Merchant.merchant_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('merchant')->insert ([
          'nama_merchant' => $request->nama_merchant,
          'address' => $request->alamat,
          'id_users' => $request->id_user
          ]);
    
          return redirect('/merchant')->with('alert_pesan', 'berhasil menambah data');
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
        $data = DB::table('merchant')->where('id', $id)->get();
        return view('Merchant.merchant_update', compact('data'));
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
        DB::table('merchant')->where('id',$request->id)->update ([
          'nama_merchant' => $request->nama_merchant,
          'address' => $request->alamat,
          'id_users' => $request->id_user
          ]);
    
          return redirect('/merchant')->with('alert_pesan', 'berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('merchant')->where('id',$id)->delete();
		return redirect('/merchant');
    }
}
