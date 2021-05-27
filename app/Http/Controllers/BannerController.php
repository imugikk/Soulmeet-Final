<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('modul.staff', compact('staffs'));
    }

    public function store(Request $request)
    {
        $staffs = new Staff;

        $file_name = time() . '_' . $request->file('foto')->getClientOriginalName();
        $staffs->foto = '/assets2/img/staffs/' . $file_name;
        $request->file('foto')->move(public_path('/assets2/img/staffs/'), $file_name);

        $staffs->nama = $request->nama;
        $staffs->divisi = $request->divisi;
        $staffs->NIK = $request->NIK;
        $staffs->gender = $request->gender;
        $staffs->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $staffs = Staff::find($id);
        $staffs->delete();
        return redirect()->back();
    }

    public function showModal($id)
    {
        $staffs = Staff::find($id);
        return response()->json(['data' => $staffs]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Staff::find($id);
        $form_detail->nama = $request->nama;
        $form_detail->NIK = $request->NIK;
        $form_detail->divisi = $request->divisi;
        $form_detail->gender = $request->gender;
        if (is_null($request->isActive)) {
            $form_detail->status = 0;
        } else {
            $form_detail->status = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

}
