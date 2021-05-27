<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistic;
use App\Statistic_detail;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        return view('landing.statistic', compact('statistics'));
    }

    public function store(Request $request)
    {
        $statistic = new Statistic;

        $file_name = time() . '_' . $request->file('image')->getClientOriginalName();
        $statistic->image = '/assets2/img/statistics/' . $file_name;
        $request->file('image')->move(public_path('/assets2/img/statistics/'), $file_name);

        $statistic->title = $request->title;
        $statistic->desc = $request->subtitle;
        $statistic->save();

        return redirect()->back();
    }

    public function storeDetail(Request $request)
    {
        $id = new Statistic_detail();
        $id->ikon = $request->ikon;
        $id->title = $request->title;
        $id->subtitle = $request->subtitle;
        $id->desc = $request->desc;
        $id->id_statistics = $request->id_statistics;
        $id->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $statistics = Statistic_detail::where('id_statistics', $id)->get();
        return view('landing.statistic_detail', compact('statistics', 'id'));
    }

    public function delete($id)
    {
        $statistics = Statistic::find($id);
        $statistic_details = Statistic_detail::where('id_statistics', $id)->get();
        foreach ($statistic_details as $std) {
            $std->delete();
        }
        $statistics->delete();
        return redirect()->back();
    }

    public function deleteDetail($id)
    {
        $statistics = Statistic_detail::find($id);
        $statistics->delete();
        return redirect()->back();
    }

    public function showModalStat($id)
    {
        $form_detail = Statistic::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalStat(Request $request, $id)
    {
        $form_detail = Statistic::find($id);
        $form_detail->title = $request->title;
        $form_detail->desc = $request->desc;
        $form_detail->image = $request->image;
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
        $form_detail = Statistic_detail::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Statistic_detail::find($id);
        $form_detail->ikon = $request->ikon;
        $form_detail->title = $request->title;
        $form_detail->subtitle = $request->subtitle;
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
