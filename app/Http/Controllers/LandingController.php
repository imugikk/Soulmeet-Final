<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Statistic;
use App\Statistic_detail;
use App\Service;
use App\Service_detail;
use App\Expert;
use App\Expert_detail;
use App\Expert_sosmed;
use App\Sosmed;
use App\Pricing;
use App\Pricing_detail;
use App\Pricing_item;
use App\Faq;
use App\Faq_detail;
use App\Config;
use App\Company_sosmed;
use App\Message;
use App\Kelas;

class LandingController extends Controller
{
    public function index()
    {

        $banners = Banner::where('st', 1)->get();
        $statistics = Statistic::where('st', 1)->get();
        $statistic_details = Statistic_detail::where('st', 1)->get();
        $services = Service::where('st', 1)->get();
        $service_details = Service_detail::where('st', 1)->get();
        $experts = Expert::where('st', 1)->get();
        $expert_details = Expert_detail::where('st', 1)->get();
        $expert_sosmeds = Expert_sosmed::where('st', 1)->get();
        $pricings = Pricing::where('st', 1)->get();
        $pricing_details = Pricing_detail::where('st', 1)->get();
        $pricing_items = Pricing_item::where('st', 1)->get();
        $sosmeds = Sosmed::all();
        $faqs = Faq::where('st', 1)->get();
        $faq_details = Faq_detail::where('st', 1)->get();
        $configs = Config::where('st', 1)->get();
        $company_sosmeds = Company_sosmed::where('st', 1)->get();
        $messages = Message::all();
        $kelas = Kelas::all();

        return view(
            'landing',
            [
                'banners' => $banners,
                'statistics' => $statistics,
                'statistic_details' => $statistic_details,
                'services' => $services,
                'service_details' => $service_details,
                'experts' => $experts,
                'expert_details' => $expert_details,
                'expert_sosmeds' => $expert_sosmeds,
                'pricings' => $pricings,
                'pricing_details' => $pricing_details,
                'pricing_items' => $pricing_items,
                'sosmeds' => $sosmeds,
                'faqs' => $faqs,
                'faq_details' => $faq_details,
                'configs' => $configs,
                'company_sosmeds' => $company_sosmeds,
                'messages' => $messages,
                'kelas' => $kelas
            ]
        );
    }

    public function store(Request $request)
    {
        // $message = new Message;
        // $message->name = $request->name;
        // $message->email = $request->email;
        // $message->subject = $request->subject;
        // $message->message = $request->message;

        // $message->save();

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'email' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('post/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
    }
}
