<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;

class PageController extends Controller
{

    public function home()
    {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(4);
        return view('pages.homepage', compact('posts'));
    }

    public function visimisi()
    {
        $data = array(
            'title' => 'Visi & Misi',
            'jumbotronImage' => 'img/visimisi.jpg'
        );
        return view('pages.visimisi')->with($data);
    }

    public function sejarah()
    {
        $data = array(
            'title' => 'Sejarah',
            'jumbotronImage' => 'img/sejarah.jpeg'
        );
        return view('pages.page')->with($data);
    }

    public function wilayah()
    {
        $data = array(
            'title' => 'Wilayah',
        );
        return view('pages.wilayah')->with($data);
    }

    public function pd()
    {
        $database = DB::table('lembagas')->where('id', 1)->first();
        if ($database == NULL) {
            $data = array(
                'title' => '',
                'deskripsi' => '',
                'gambar' => '',
                'jumbotronImage' => 'img/pd.png'
            );
        } else {

            $data = array(
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar,
                'jumbotronImage' => 'img/pd.png'
            );
        }
        return view('pages.lembaga')->with($data);
    }

    public function bpd()
    {
        $database = DB::table('lembagas')->where('id', 2)->first();
        if ($database == NULL) {
            $data = array(
                'title' => '',
                'deskripsi' => '',
                'gambar' => '',
                'jumbotronImage' => 'img/pd.png'
            );
        } else {

            $data = array(
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar,
                'jumbotronImage' => 'img/bpd.png'
            );
        }
        return view('pages.lembaga')->with($data);
    }

    public function lpm()
    {
        $database = DB::table('lembagas')->where('id', 3)->first();
        if ($database == NULL) {
            $data = array(
                'title' => '',
                'deskripsi' => '',
                'gambar' => '',
                'jumbotronImage' => 'img/pd.png'
            );
        } else {

            $data = array(
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar,
                'jumbotronImage' => 'img/pd.png'
            );
        }
        return view('pages.lembaga')->with($data);
    }

    public function pkk()
    {
        $database = DB::table('lembagas')->where('id', 4)->first();
        if ($database == NULL) {
            $data = array(
                'title' => '',
                'deskripsi' => '',
                'gambar' => '',
                'jumbotronImage' => 'img/pd.png'
            );
        } else {

            $data = array(
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar,
                'jumbotronImage' => 'img/pd.png'
            );
        }
        return view('pages.lembaga')->with($data);
    }

    public function kt()
    {
        $database = DB::table('lembagas')->where('id', 5)->first();
        if ($database == NULL) {
            $data = array(
                'title' => '',
                'deskripsi' => '',
                'gambar' => '',
                'jumbotronImage' => 'img/pd.png'
            );
        } else {

            $data = array(
                'title' => $database->nama,
                'deskripsi' => $database->deskripsi,
                'gambar' => $database->gambar,
                'jumbotronImage' => 'img/pd.png'
            );
        }
        return view('pages.lembaga')->with($data);
    }

    public function transparansi()
    {
        $data = array(
            'title' => 'Transparansi',
        );
        return view('pages.page')->with($data);
    }

    public function kontak()
    {
        $data = array(
            'title' => 'Kontak',
        );
        return view('pages.pagewoj')->with($data);
    }
}
