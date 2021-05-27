<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Service_detail;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('landing.service',compact('services'));
    }

    public function store(Request $request){
        $service = new Service;
        $service->title = $request->title;
        $service->desc = $request->subtitle;
        $service->save();

        return redirect()->back();
    }

    public function storeDetail(Request $request){
        $id = new Service_detail();
        $id->ikon = $request->ikon;
        $id->title = $request->title;
        $id->desc = $request->desc;
        $id->id_services = $request->id_services;
        $id->save();

        return redirect()->back();
    }

    public function show($id){
        $services = Service_detail::where('id_services', $id)->get();
        return view('landing.service_detail', compact('services', 'id'));
    }

    public function delete($id){
        $services = Service::find($id);
        $service_details = Service_detail::where('id_services', $id)->get();
        foreach($service_details as $std){
            $std->delete();
        }
        $services->delete();
        return redirect()->back();
    }

    public function deleteDetail($id){
        $services = Service_detail::find($id);
        $services->delete();
        return redirect()->back();
    }

    public function showModalServ($id){
        $form_detail = Service::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalServ(Request $request, $id){
        $form_detail = Service::find($id);
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

    public function showModal($id){
        $form_detail = Service_detail::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id){
        $form_detail = Service_detail::find($id);
        $form_detail->ikon = $request->ikon;
        $form_detail->title = $request->title;
        $form_detail->desc = $request->desc;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }
}
