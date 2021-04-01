<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuTamuModel;
use DataTables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
      {
        //mengambil data bukuTamu sesuai Id
        $bukuTamu=\App\BukuTamuModel::find($id);
        return view ('edit', compact('bukuTamu'));
      }

    public function update(Request $request, $id)
        {
          //update data ke tabel sesuai id
          $bukuTamu = \App\BukuTamuModel::find($id)->update([
            'id' => $request['id'],
            'tgl_mulai' => $request['tgl_mulai'],
            'tgl_selesai' => $request['tgl_selesai'],
            'bidang' => $request['bidang'],
            'nama_pengirim' => $request['nama_pengirim'],
            'keterangan' => $request['keterangan'],
            'gambar' => $request['gambar'],
            'kebijakan' => $request['kebijakan'],
            'request_id' => $request['request_id'],
          ]);
          return redirect(route('home'));
        }

    public function create()
      {
        return view('create');
      }

    public function store(Request $request)
      {
        //menyimpan ke table
      	$bukuTamu = \App\BukuTamuModel::create([
          'tgl_mulai' => $request['tgl_mulai'],
          'tgl_selesai' => $request['tgl_selesai'],
          'bidang' => $request['bidang'],
          'nama_pengirim' => $request['nama_pengirim'],
          'keterangan' => $request['keterangan'],
          'gambar' => $request['gambar'],
          'kebijakan' => $request['kebijakan'],
          'request_id' => $request['request_id'],
        ]);
      	return redirect(route('home'));
      }

      public function destroy($id)
        {
          //menghapus sesuai id
          $bukuTamu=\App\BukuTamuModel::find($id);
          $bukuTamu->delete();
          return redirect(route('home'));
        }

      public function jsonDatatables()
        {
          $bukuTamu=\App\BukuTamuModel::all();
          return Datatables::of($bukuTamu)
          ->addColumn('action', function ($bukuTamu) {
              return '<a href="/home/'.$bukuTamu->id.'/edit"
                      class="btn btn-xs btn-primary">
                      <i class="glyphicon glyphicon-edit"></i> Edit</a>
                      
                      <form action="/home/'.$bukuTamu->id.'" method="POST">
                      <input name="_method" type="hidden" value="DELETE">
                      '.csrf_field().'
                      <button type="submit" class="btn btn-xs btn-danger">
                      <i class="glyphicon glyphicon-trash"></i>
                      Batalkan</button>
                      </form>';

          })
          ->make(true);
        }


}
