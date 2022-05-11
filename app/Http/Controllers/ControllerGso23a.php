<?php

namespace App\Http\Controllers;

use App\Model_Gso23a;
use Illuminate\Http\Request;

class ControllerGso23a extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gso23a = Model_Gso23a::all();
      return view('gso23a',['gso23a' => $gso23a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_gso23a');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'nama' => 'required',
          'jenis_kelamin' => 'required',
          'agama' => 'required',
          'email' => 'required',
          'asal_sekolah' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

      $input = $request->all();

      if ($image = $request->file('image')) {
          $destinationPath = 'image/';
          $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
          $image->move($destinationPath, $profileImage);
          $input['image'] = "$profileImage";
      }

      Model_Gso23a::create($input);

      return redirect('/gso23a');
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
    public function edit(Model_Gso23a $gso23a)
    {
        return view('editgso23a', compact('gso23a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Gso23a $gso23a)
    {
      Model_Gso23a::where('id', $gso23a->id)
           ->update([
               'nama' => $request->nama,
               'jenis_kelamin' => $request->jenis_kelamin,
               'agama' => $request->agama,
               'email' => $request->email,
               'asal_sekolah' => $request->asal_sekolah,
               'image' => $request->image
           ]);

           $input = $request->all();

          if ($image = $request->file('image')) {
              $destinationPath = 'image/';
              $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
              $image->move($destinationPath, $profileImage);
              $input['image'] = "$profileImage";
          }else{
              unset($input['image']);
          }

          $gso23a->update($input);

       return redirect('/gso23a');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Gso23a $gso23a)
    {
      Model_Gso23a::destroy($gso23a->id);
      return redirect('/gso23a');
    }
}
