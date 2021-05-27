<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Kelas_detail;
use App\Expert_detail;
use App\Bab;
use App\Fasilitas;
// use App\SubBab;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::join('expert_details', 'expert_details.id', 'kelas.pembicara_id')->select('expert_details.name', 'kelas.*')->get();
        $expert_details = Expert_detail::all();
        return view('kelas.kelas', compact('kelas', 'expert_details'));
    }

    public function store(Request $request)
    {
        $kelas = new Kelas;

        $file_name = time() . '_' . $request->file('image')->getClientOriginalName();
        $kelas->image_preview_kelas = '/assets2/img/kelas/' . $file_name;
        $request->file('image')->move(public_path('/assets2/img/kelas/'), $file_name);

        $kelas->judul_kelas = $request->title;
        $kelas->desc_kelas = $request->desc;
        $kelas->durasi_kelas = $request->durasi;
        $kelas->harga_kelas = $request->harga;
        $kelas->rating_kelas = $request->rating;
        $kelas->pembicara_id = $request->id_pembicara;
        $kelas->requirement_kelas = $request->requirement;
        $kelas->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $bab = Bab::where('kelas_id', $id)->get();
        foreach ($bab as $std) {
            $std->delete();
        }
        $kelas->delete();
        return redirect()->back();
    }

    public function showModal($id)
    {
        $form_detail = Kelas::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Kelas::find($id);
        $form_detail->judul_kelas = $request->title;
        $form_detail->desc_kelas = $request->desc;
        $form_detail->durasi_kelas = $request->durasi;
        $form_detail->harga_kelas = $request->harga;
        $form_detail->image_preview_kelas = $request->image;
        $form_detail->rating_kelas = $request->rating;
        $form_detail->pembicara_id = $request->id_pembicara;
        $form_detail->requirement_kelas = $request->requirement;
        $form_detail->save();
        return redirect()->back();
    }

    public function showBab($id)
    {
        $fasilitas = Kelas_detail::join('fasilitas', 'fasilitas.id', 'kelas_detail.fasilitas_id')->select('kelas_detail.*', 'fasilitas.nama_fasilitas')->where('kelas_id', $id)->get();
        $bab = Bab::where('kelas_id', $id)->get();
        return view('kelas.bab', compact('bab', 'id', 'fasilitas'));
    }

    public function storeBab(Request $request)
    {
        $id = new Bab();

        $file_name = time() . '_' . $request->file('image')->getClientOriginalName();
        $id->image = '/assets2/img/bab/' . $file_name;
        $request->file('image')->move(public_path('/assets2/img/bab/'), $file_name);

        $id->judul_bab = $request->judul;
        $id->desc_bab = $request->desc;
        $id->durasi_bab = $request->durasi;
        $id->kelas_id = $request->kelas_id;
        $id->save();

        return redirect()->back();
    }

    public function deleteBab($id)
    {
        $bab = Bab::find($id);
        // $sub_bab = SubBab::where('bab_id', $id)->get();
        // foreach ($sub_bab as $std) {
        //     $std->delete();
        // }
        $bab->delete();
        return redirect()->back();
    }

    public function showModalBab($id)
    {
        $form_detail = Bab::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalBab(Request $request, $id)
    {
        $form_detail = Bab::find($id);
        $form_detail->judul_bab = $request->judul;
        $form_detail->desc_bab = $request->desc;
        $form_detail->durasi_bab = $request->durasi;
        $form_detail->save();

        return redirect()->back();
    }

    public function showFasilitas($id)
    {
        $fasilitas = Fasilitas::get();
        return view('kelas.create_fasilitas', compact('fasilitas', 'id'));
    }

    public function storeFasilitas(Request $request, $id)
    {
        foreach ($request->fasilitas as $item) {
            $cek = Kelas_detail::where('kelas_id', $id)->where('fasilitas_id', $item)->count();
            if ($cek < 1) {
                $kelas_detail = new Kelas_detail;

                $kelas_detail->kelas_id = $id;
                $kelas_detail->fasilitas_id = $item;

                $kelas_detail->save();
            }
        }
        return redirect('/admin/bab/' . $id);
    }

    public function deleteFasilitas($id)
    {
        $kelas = Kelas_detail::where('fasilitas_id', $id)->get();
        foreach ($kelas as $std) {
            $std->delete();
        }
        return redirect()->back();
    }

    // public function show($id)
    // {
    //     $kelas_details = Kelas_detail::where('kelas_id', $id)->get();
    //     return view('kelas.kelas_detail', compact('kelas_details', 'id'));
    // }

    // public function storeDetail(Request $request)
    // {
    //     $id = new Kelas_detail();
    //     $id->fasilitas_id = $request->fasilitas_id;
    //     $id->kelas_id = $request->kelas_id;
    //     $id->save();

    //     return redirect()->back();
    // }

    // public function deleteDetail($id)
    // {
    //     $faqs = Kelas_detail::find($id);
    //     $faqs->delete();
    //     return redirect()->back();
    // }

    // public function showModalDetail($id)
    // {
    //     $form_detail = Kelas_detail::find($id);
    //     return response()->json(['data' => $form_detail]);
    // }

    // public function updateModalDetail(Request $request, $id)
    // {
    //     $form_detail = Kelas_detail::find($id);
    //     $form_detail->title = $request->title;
    //     $form_detail->subtitle = $request->subtitle;
    //     if (is_null($request->isActive)) {
    //         $form_detail->st = 0;
    //     } else {
    //         $form_detail->st = 1;
    //     }
    //     $form_detail->save();

    //     return redirect()->back();
    // }
}
