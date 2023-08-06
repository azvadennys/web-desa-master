<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminpage()
    {
        return view('home');
    }
    public function pd()
    {
        $database = DB::table('lembagas')->where('id', 1)->first();
        if ($database == NULL) {
            $data = array(
                'id' => '',
                'title' => 'Tidak ada data',
                'deskripsi' => 'Tidak ada data',
                'gambar' => 'Tidak ada data'
            );
        } else {

            $data = array(
                'id' => $database->id,
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar
            );
        }
        return view('admin.adminpage')->with($data);
    }

    public function bpd()
    {
        $database = DB::table('lembagas')->where('id', 2)->first();
        if ($database == NULL) {
            $data = array(
                'id' => '',
                'title' => 'Tidak ada data',
                'deskripsi' => 'Tidak ada data',
                'gambar' => 'Tidak ada data'
            );
        } else {

            $data = array(
                'id' => $database->id,
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar
            );
        }
        return view('admin.adminpage')->with($data);
    }

    public function lpm()
    {
        $database = DB::table('lembagas')->where('id', 3)->first();
        if ($database == NULL) {
            $data = array(
                'id' => '',
                'title' => 'Tidak ada data',
                'deskripsi' => 'Tidak ada data',
                'gambar' => 'Tidak ada data'
            );
        } else {

            $data = array(
                'id' => $database->id,
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar
            );
        }
        return view('admin.adminpage')->with($data);
    }

    public function pkk()
    {
        $database = DB::table('lembagas')->where('id', 4)->first();
        if ($database == NULL) {
            $data = array(
                'id' => '',
                'title' => 'Tidak ada data',
                'deskripsi' => 'Tidak ada data',
                'gambar' => 'Tidak ada data'
            );
        } else {

            $data = array(
                'id' => $database->id,
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar
            );
        }
        return view('admin.adminpage')->with($data);
    }

    public function kt()
    {
        $database = DB::table('lembagas')->where('id', 5)->first();
        if ($database == NULL) {
            $data = array(
                'id' => '',
                'title' => 'Tidak ada data',
                'deskripsi' => 'Tidak ada data',
                'gambar' => 'Tidak ada data'
            );
        } else {

            $data = array(
                'id' => $database->id,
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar
            );
        }
        return view('admin.adminpage')->with($data);
    }

    public function editProses(Request $request, $id)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $gambar = $request->gambar;
        $new_gambar = time() . $gambar->getClientOriginalName();

        DB::table('lembagas')->where('id', $id)
            ->update([
                'deskripsi' => $request->deskripsi,
                'gambar' => 'uploads/bagan/' . $new_gambar
            ]);

        $gambar->move('uploads/bagan/', $new_gambar);
        return back()->with('status', 'Data berhasil diubah!');
    }
}
