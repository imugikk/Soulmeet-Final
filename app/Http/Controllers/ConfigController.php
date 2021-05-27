<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;
use App\Company_sosmed;
use App\Sosmed;

class ConfigController extends Controller
{
    public function index()
    {
        $configs = Config::all();
        return view('landing.config', compact('configs'));
    }

    public function store(Request $request)
    {
        $config = new Config;

        $file_name = time() . '_' . $request->file('image')->getClientOriginalName();
        $config->image_preview_kelas = '/assets2/img/configs/' . $file_name;
        $request->file('image')->move(public_path('/assets2/img/configs/'), $file_name);

        $config->title = $request->title;
        $config->desc = $request->desc;
        $config->address = $request->address;
        $config->email = $request->email;
        $config->phone = $request->phone;
        $config->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $configs = Company_sosmed::join('sosmeds', 'sosmeds.id', 'company_sosmeds.sosmed_id')->select('sosmeds.title', 'company_sosmeds.*')->where('config_id', $id)->get();
        $sosmeds = Sosmed::all();
        return view('landing.company_sosmed', compact('configs', 'id', 'sosmeds'));
    }

    public function delete($id)
    {
        $services = Config::find($id);
        $service_details = Company_sosmed::where('config_id', $id)->get();
        foreach ($service_details as $std) {
            $std->delete();
        }
        $services->delete();
        return redirect()->back();
    }

    public function showModalConfig($id)
    {
        $form_detail = Config::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalConfig(Request $request, $id)
    {
        $form_detail = Config::find($id);
        $form_detail->title = $request->title;
        $form_detail->desc = $request->desc;
        $form_detail->address = $request->address;
        $form_detail->email = $request->email;
        $form_detail->phone = $request->phone;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function showConfigId($id)
    {
        $configs = Company_sosmed::join('sosmeds', 'sosmeds.id', 'company_sosmeds.sosmed_id')->select('sosmeds.title', 'company_sosmeds.*')->where('config_id', $id)->get();
        $sosmeds = Sosmed::all();
        return view('landing.company_sosmed', compact('configs', 'id', 'sosmeds'));
    }

    public function showConfigIdModal($id)
    {
        $form_detail = Company_sosmed::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateConfigIdModal(Request $request, $id)
    {
        $form_detail = Company_sosmed::find($id);
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

    public function storeConfigSosmed(Request $request)
    {
        $form_detail = new Company_sosmed();

        $form_detail->expert_detail_id = $request->id_expert_details;
        $form_detail->sosmed_id = $request->id_sosmeds;
        $form_detail->url = $request->url;
        $form_detail->save();

        return redirect()->back();
    }
}
