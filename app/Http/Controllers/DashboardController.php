<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\TranQuestionnaire;
use App\RefLikert;

class DashboardController extends Controller
{
    public function index() {
        return view('/');
    }

    public function adminDashboard() {
        return view('dashboard_admin');
    }

    public function userDashboard() {
        return view('dashboard_respondent');
    }

    public function banner() {
        return view('landing.banner');
    }

    public function statistic() {
        return view('landing.statistic');
    }

    public function service() {
        return view('landing.service');
    }

    public function expert() {
        return view('landing.expert');
    }

    public function pricing() {
        return view('landing.pricing');
    }

    public function faq() {
        return view('landing.faq');
    }

    public function config() {
        return view('landing.config');
    }

}
