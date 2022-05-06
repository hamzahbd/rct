<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|confirmed|max:24|min:8'
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::Create($validated);
        // $request->session()->flash('success', 'Registration Successful! please login');

        return redirect('/login')->with('success', 'Daftar berhasil, silahkan login');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('profile.index', [
            'title' => "profile",
            'user' => $user

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $validated = [
            'name' => 'required|max:255',
            'no_hp' => 'required|numeric',

        ];

        $validatedData = $request->validate($validated);

        // $user->name = $request['name'];
        // $user->no_hp = $request['no_hp'];
        // $user->save();

        User::where('id', $user->id)->update($validatedData);


        return redirect('/profile/' . $user->id)->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function pesanan(User $user)
    {
        //
        return view('profile.pesanan', [
            'title' => "pesanan",
            'user' => $user
        ]);
    }

    public function alamat(User $user)
    {
        //
        $alamat = $user->alamat;
        $Arrayalamat = explode('+', $alamat);
        return view('profile.alamat', [
            'title' => "alamat",
            'user' => $user,
            'provinsi' => $Arrayalamat[0],
            'kota' => $Arrayalamat[1],
            'kecamatan' => $Arrayalamat[2],
            'kode_pos' => $Arrayalamat[3],
            'jalan' => $Arrayalamat[4],
        ]);
    }

    public function alamat_edit(Request $request, User $user)
    {

        $validated = [
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'required|numeric',
            'jalan' => 'required',
            'name' => 'required|max:255',
            'no_hp' => 'required|numeric',
        ];

        $validatedData = $request->validate($validated);




        $request['alamat'] = $request['provinsi'] . '+' . $request['kota'] . '+' . $request['kecamatan'] . '+' . $request['kode_pos'] . '+' . $request['jalan'];


        $user->name = $request['name'];
        $user->alamat = $request['alamat'];
        $user->no_hp = $request['no_hp'];
        $user->save();

        return redirect('/profile/' . $user->id . '/alamat')->with('success', 'Alamat berhasil di edit');
    }

    public function ubah_password(User $user)
    {
        //
        return view('profile.gantipassword', [
            'title' => "ubah-password",
            'user' => $user
        ]);
    }

    public function ubah_password_fun(Request $request, User $user)
    {
        $validated = $request->validate([
            'passwordini' => 'required|current_password|max:24|min:8',
            'password' => 'required|confirmed|max:24|min:8',
            'password_confirmation' => 'required',
        ]);



        $hashedPassword = $user->password;
        if (Hash::check($request->passwordini, $hashedPassword)) {
            if (Hash::check($request->password, $hashedPassword)) {

                $user->password = bcrypt($request->password);
                $user->save();
                session()->flash('message', 'password updated successfully');
                return redirect()->back();
            } else {
                session()->flash('message', 'new password can not be the old password!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'old password doesnt matched');
            return redirect()->back();
        }


        // $user->password =  $validatedData['password'];
        // $user->save();
        // return redirect('/profile/' . $user->id . '/alamat')->with('success', 'Password berhasil di ubah');
    }
}
