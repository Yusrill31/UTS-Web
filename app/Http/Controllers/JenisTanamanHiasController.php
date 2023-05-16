<?php

namespace App\Http\Controllers;

use App\Models\JenisTanamanHias;
use Illuminate\Http\Request;
use App\Http\Requests\JenisTanamanRequest;


class JenisTanamanHiasController extends Controller
{
    public function index(){
        $JenisTanamanHias = JenisTanamanHias::get();
        return view ('index', compact('JenisTanamanHias') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $JenisTanamanHias = JenisTanamanHias::where('id', $id)->first();
        return view ('edit',compact('JenisTanamanHias'));
      }

      public function lihat($id){
        $JenisTanamanHias = JenisTanamanHias::where('id', $id)->first();
        return view ('lihat',compact('JenisTanamanHias'));
      }


    public function store(JenisTanamanRequest $request)
    {
        $JenisTanamanHias = new JenisTanamanHias ();

        $JenisTanamanHias->nama_tanaman     = $request->nama_tanaman;
        $JenisTanamanHias->penjelasan    =  $request->penjelasan;

        $JenisTanamanHias->save();

        return redirect('/');
    } 
    
    public function update(JenisTanamanRequest $request,$id)
    {
        $JenisTanamanHias = JenisTanamanHias::where('id', $id)->first();
        $JenisTanamanHias->nama_tanaman    = $request->nama_tanaman;
        $JenisTanamanHias->penjelasan    =  $request->penjelasan;
    
        $JenisTanamanHias->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $JenisTanamanHias = JenisTanamanHias::where('id', $id)->first();

        $JenisTanamanHias->delete();

        return redirect('/');
    }  

}
