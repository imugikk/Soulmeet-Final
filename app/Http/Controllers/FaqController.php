<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Faq;
use \App\Faq_detail;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('landing.faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        $faq = new Faq;
        $faq->title = $request->title;
        $faq->subtitle = $request->subtitle;
        $faq->save();

        return redirect()->back();
    }

    public function storeDetail(Request $request)
    {
        $id = new Faq_detail();
        $id->questions = $request->questions;
        $id->answers = $request->answers;
        $id->faq_id = $request->faq_id;
        $id->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $faqs = Faq_detail::where('faq_id', $id)->get();
        return view('landing.faq_detail', compact('faqs', 'id'));
    }

    public function delete($id)
    {
        $faqs = Faq::find($id);
        $faq_details = Faq_detail::where('faq_id', $id)->get();
        foreach ($faq_details as $std) {
            $std->delete();
        }
        $faqs->delete();
        return redirect()->back();
    }

    public function deleteDetail($id)
    {
        $faqs = Faq_detail::find($id);
        $faqs->delete();
        return redirect()->back();
    }

    public function showModalFaq($id)
    {
        $form_detail = Faq::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModalFaq(Request $request, $id)
    {
        $form_detail = Faq::find($id);
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
        $form_detail = Faq_detail::find($id);
        return response()->json(['data' => $form_detail]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Faq_detail::find($id);
        $form_detail->questions = $request->questions;
        $form_detail->answers = $request->answers;
        if (is_null($request->isActive)) {
            $form_detail->st = 0;
        } else {
            $form_detail->st = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }
}
