<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('kelas.fasilitas', compact('fasilitas'));
    }

    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->ikon_fasilitas = $request->ikon;
        $fasilitas->nama_fasilitas = $request->name;
        $fasilitas->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect()->back();
    }

    public function showModal($id)
    {
        $form_detail = Fasilitas::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Fasilitas::find($id);
        $form_detail->ikon_fasilitas = $request->title;
        $form_detail->nama_fasilitas = $request->desc;
        $form_detail->save();

        return redirect()->back();
    }
}
