<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Transaksi;
use App\Models\Item;
use Illuminate\Support\facades\DB;
use Session;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('transaksi')
                        ->select('transaksi.id', 'transaksi.id_items', 'transaksi.nama_items', 'items.price', 'transaksi.qty', 'transaksi.total_price')
                        ->join('items', 'items.id', '=', 'transaksi.id_items')
                        ->get();
        
        return view('transaksi.transaksi', compact('data'));
    }

    public function create()
    {
        return view('transaksi.transaksi_create');
    }


    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'id' => 'required',
        //     'nama_items' => 'required',
        //     'qty' => 'required',
        //     'total_price' => 'required'
        // ]);
        // $picture = rand().$request->file('picture')->getClientOriginalName();
        // $request->file('picture')->move(base_path("./public/Uploads"), $picture);
   
        
        $transaksi = new transaksi();
        // $transaksi = item::where('id', id)->first();
        $transaksi->id_items = $request->id_items;
        $transaksi->nama_items = $request->items_name;
        $transaksi->qty = $request->qty;
        // $transaksi->total_price = $request->total_price;
        $transaksi->total_price = $request->qty * $request->price;
        $transaksi->id_merchant = $request->id_merchant;
        $transaksi->save();
        

        return redirect('/transaksi')->with('alert_pesan', 'Data telah disimpan');
            
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $data = transaksi::where('id', $id)->get();
        return view('Transaksi.transaksi_update', compact('data'));
    }
    public function update(Request $request, $id)
    {
        DB::table('transaksi')->where('id',$request->id)->update ([
            'id_items' => $request->id_items,
            'nama_items' => $request->items_name,
            'qty' => $request->qty,
            'total_price' => $request->total_price,
            'id_merchant' => $request->id_merchant
            ]);
             
        
        return redirect('/transaksi')->with('alert_pesan', 'Data telah diubah');

    }
    public function destroy($id)
    {
        $data = transaksi::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/transaksi')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/transaksi')->with('alert_message', 'ID tidak ditemukan!');
    }



}