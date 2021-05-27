<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expert;
use App\Expert_detail;
use App\Expert_sosmed;
use App\Sosmed;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = Expert::all();
        return view('landing.expert', compact('experts'));
    }

    public function store(Request $request)
    {
        $expert = new Expert;
        $expert->title = $request->title;
        $expert->subtitle = $request->subtitle;
        $expert->save();

        return redirect()->back();
    }

    public function storeDetail(Request $request)
    {
        $id = new Expert_detail();

        $file_name = time() . '_' . $request->file('image')->getClientOriginalName();
        $id->image = '/assets2/img/experts/' . $file_name;
        $request->file('image')->move(public_path('/assets2/img/experts/'), $file_name);

        $id->name = $request->name;
        $id->position = $request->position;
        $id->id_experts = $request->id_experts;
        $id->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $experts = Expert_detail::where('id_experts', $id)->get();
        return view('landing.expert_detail', compact('experts', 'id'));
    }

    public function delete($id)
    {
        $experts = Expert::find($id);
        $expert_details = Expert_detail::where('id_experts', $id)->get();
        foreach ($expert_details as $std) {
            $std->delete();
        }
        $experts->delete();
        return redirect()->back();
    }

    public function deleteDetail($id)
    {
        $experts = Expert_detail::find($id);
        $experts->delete();
        return redirect()->back();
    }

    public function showModalExp($id)
    {
        $form_detail = Expert::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalExp(Request $request, $id)
    {
        $form_detail = Expert::find($id);
        $form_detail->title = $request->title;
        $form_detail->subtitle = $request->subtitle;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function showModal($id)
    {
        $form_detail = Expert_detail::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Expert_detail::find($id);
        $form_detail->name = $request->name;
        $form_detail->position = $request->position;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function showExpertId($id){
        $experts = Expert_sosmed::join('sosmeds','sosmeds.id','expert_sosmeds.sosmed_id')->select('sosmeds.title', 'expert_sosmeds.*')->where('expert_detail_id', $id)->get();
        $expert_details = Expert_detail::all();
        $sosmeds = Sosmed::all();
        $expert_detail = Expert_detail::find($id);
        return view('landing.expert_sosmed', compact('experts', 'id', 'sosmeds', 'expert_details', 'expert_detail'));
    }

    public function showExpertIdModal($id)
    {
        $form_detail = Expert_sosmed::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateExpertIdModal(Request $request, $id)
    {
        $form_detail = Expert_sosmed::find($id);
        $form_detail->sosmed_id = $request->id_sosmeds;
        $form_detail->url = $request->url;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function storeExpertSosmed(Request $request){
        $form_detail = new Expert_sosmed();

        $form_detail->expert_detail_id = $request->id_expert_details;
        $form_detail->sosmed_id = $request->id_sosmeds;
        $form_detail->url = $request->url;
        $form_detail->save();

        return redirect()->back();
    }
}
