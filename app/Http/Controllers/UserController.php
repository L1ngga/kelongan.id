<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\support\facades\Session;
use App\Models\User;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware('cek_login');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['count'] = User::where('level', '=', 'customer')->count();

        // if($limit == NULL && $offset == NULL){
            $data["user"] = User::where('level', '=', 'customer')->get();
        // } else {
        //     $data["user"] = User::where('level', '=', 'admin')->take($limit)->skip($offset)->get();
        // }

        return view('user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
            'email' => 'required|string|max:50',
            'name' => 'required|string|max:50',
            'password' => 'required|string|min:5',
        ]);

        // if($validator->fails()){
        //     return $this->response->errorResponse($validator->errors());
        // }
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->level = 'customer';
        $user->save();


        Session::flash('pesan_register', 'Berhasil Register');
        return redirect('/log in')->with('alert_pesan', 'Data anda telah disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data["user"] = User::where('id', $id)->get();

        return view('user', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["user"] = User::where('id', $id)->get();

        return view('user_update', compact('data'));
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
        $this->validate($request, [
            'username' => 'required|string|max:50',
            'password' => 'required|string|min:10',
        ]);



        $user = User::where('id', $id)->first();
        $user->Username = $request->nama;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('UserController.index')->with('alert_pesan', 'Data anda telah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();

        if($data != null){
            $data->delete();

            return redirect('/user')->with('alert_message', 'Berhasil menghapus data!');
        }

        return redirect('/user')->with('alert_message', 'ID tidak ditemukan!');
    }
}
