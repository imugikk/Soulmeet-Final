<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;
use App\Pricing_detail;
use App\Pricing_item;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::all();
        return view('landing.pricing', compact('pricings'));
    }

    public function store(Request $request)
    {
        $pricing = new Pricing;
        $pricing->title = $request->title;
        $pricing->subtitle = $request->subtitle;
        $pricing->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $pricing_details = Pricing_detail::where('pricing_id', $id)->get();
        return view('landing.pricing_detail', compact('pricing_details', 'id'));
    }

    public function delete($id)
    {
        $pricings = Pricing::find($id);
        $pricing_details = Pricing_detail::where('pricing_id', $id)->get();
        foreach ($pricing_details as $std) {
            $std->delete();
        }
        $pricings->delete();
        return redirect()->back();
    }

    public function showModalPrice($id)
    {
        $form_detail = Pricing::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalPrice(Request $request, $id)
    {
        $form_detail = Pricing::find($id);
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

    public function deleteDetail($id)
    {
        $pricing_details = Pricing_detail::find($id);
        $pricing_details->delete();
        return redirect()->back();
    }

    public function storeDetail(Request $request)
    {
        $id = new Pricing_detail();
        $id->title = $request->title;
        $id->price = $request->price;
        $id->type = $request->type;
        $id->price_type = $request->price_type;
        $id->pricing_id = $request->pricing_id;
        $id->type = $request->type;
        $id->save();

        return redirect()->back();
    }

    public function showModal($id)
    {
        $form_detail = Pricing_detail::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Pricing_detail::find($id);
        $form_detail->title = $request->title;
        $form_detail->price_type = $request->price_type;
        $form_detail->price = $request->price;
        $form_detail->type = $request->type;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function showModalItem($id)
    {
        $form_detail = Pricing_item::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalItem(Request $request, $id)
    {
        $form_detail = Pricing_item::find($id);
        $form_detail->desc = $request->desc;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }

    public function deleteItem($id)
    {
        $pricing_items = Pricing_item::find($id);
        $pricing_items->delete();
        return redirect()->back();
    }

    public function storeItem(Request $request)
    {
        $pricing = new Pricing_item;
        $pricing->desc = $request->desc;
        $pricing->pricing_detail_id = $request->pricing_detail_id;
        $pricing->save();

        return redirect()->back();
    }

    public function showItem($id)
    {
        $pricing_items = Pricing_item::where('pricing_detail_id', $id)->get();
        $pricing_detail = Pricing_detail::find($id);
        return view('landing.pricing_item', compact('pricing_items', 'id', 'pricing_detail'));
    }

}
