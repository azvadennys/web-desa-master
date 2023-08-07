<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


use App\Galery;
// use App\Comments;


class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = galery::orderBy('created_at', 'desc')->paginate(9);
        return view('admin.galery', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'content' => 'required',
            'thumbnail' => 'required'
        ]);

        $thumbnail = $request->thumbnail;
        $gambar = time() . $thumbnail->getClientOriginalName();

        $post = Galery::create([
            'judul' => $request->judul,
            'content' => $request->content,
            'thumbnail' => 'uploads/galery/' . $gambar,
            'slug' => Str::of($request->judul)->slug('-')
        ]);

        $thumbnail->move('uploads/galery/', $gambar);

        return redirect()->route('galery.index')->with('status', 'Galery anda berhasil dibuat!');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $posts = Galery::orderBy('created_at', 'desc')->paginate(9);
        return view('galeries', compact('posts'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $query = request('query');
        $posts = Galery::where("judul", "like", "%$query%")->orWhere("content", "like", "%$query%")->latest()->paginate(10);

        return view('galeries', compact('posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Galery::where('slug', $slug)->first();
        return view('galery', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Galery::findorfail($id);
        return view('admin.galery_edit', compact('post'));
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
            'judul' => 'required',
            'content' => 'required',
        ]);

        $post = Galery::findorfail($id);

        if ($request->has('thumbnail')) {

            $thumbnail = $request->thumbnail;
            $gambar = time() . $thumbnail->getClientOriginalName();

            $post_data = [
                'judul' => $request->judul,
                'content' => $request->content,
                'thumbnail' => 'uploads/galery/' . $gambar,
                'slug' => Str::of($request->judul)->slug('-')
            ];
            File::delete(public_path($post->thumbnail));
            $thumbnail->move('uploads/galery/', $gambar);
        } else {
            $post_data = [
                'judul' => $request->judul,
                'content' => $request->content,
                'slug' => Str::of($request->judul)->slug('-')
            ];
        }

        $post->update($post_data);

        return redirect()->route('galery.index')->with('status', 'Postingan anda berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Galery::findorfail($id);
        File::delete(public_path($post->thumbnail));
        $post->delete();

        return redirect()->route('galery.index')->with('status', 'Postingan anda berhasil dihapus!');
    }

    //     public function comment(Request $request)
    // {
    //     //VALIDASI DATA YANG DITERIMA
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'email' => 'required',
    //         'comment' => 'required'
    //     ]);

    //     Comments::create([
    //         'posts_id' => $request->id,
    //         //JIKA PARENT ID TIDAK KOSONG, MAKA AKAN DISIMPAN IDNYA, SELAIN ITU NULL
    //         'parent_id' => $request->parent_id != '' ? $request->parent_id:NULL,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'comment' => $request->comment
    //     ]);
    //     return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
    // }
}
