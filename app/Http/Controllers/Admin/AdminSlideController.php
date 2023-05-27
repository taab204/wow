<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide;

class AdminSlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('id', 'desc')->get();
        return view('admin.slide_view', compact('slides'));
    }

    public function add()
    {
        return view('admin.slide_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('foto')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('foto')->move(public_path('uploads/'), $final_name);

        $obj = new Slide();
        $obj->foto = $final_name;
        $obj->ref = $request->ref;
        $obj->text = $request->text;
        $obj->btext = $request->btext;
        $obj->burl = $request->burl;
        $obj->save();
        return redirect('admin/slide/view')->with('crear', 'Slide se creo satisfactoriamente.');
    }

    public function edit($id)
    {
        $slide_data = Slide::where('id', $id)->first();
        return view('admin.slide_edit', compact('slide_data'));
    }

    public function update(Request $request, $id)
    {
        $obj = Slide::where('id', $id)->first();
        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $obj->foto));
            $ext = $request->file('foto')->extension();
            $final_name = time() . '.' . $ext;
            $request->file('foto')->move(public_path('uploads/'), $final_name);
            $obj->foto = $final_name;
        }

        $obj->ref = $request->ref;
        $obj->text = $request->text;
        $obj->btext = $request->btext;
        $obj->burl = $request->burl;
        $obj->update();
        return redirect()->back()->with('actualizo', 'Slide se actualizó correctamente.');
    }

    public function delete($id)
    {
        $single_data = Slide::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_data->foto));
        $single_data->delete();

        return redirect()->back()->with('eliminar', 'Slide se elimina con exito.');
    }
}
