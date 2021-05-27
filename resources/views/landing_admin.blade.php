@extends('layouts.admin')

@section('title', 'Landing')


@section('content')

    <div class="container-fluid">
        <div class="row">
            <h1 class="m-0 text-dark ml-4 mt-4 mb-3">Landing</h1>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <a href="" data-toggle="modal" data-target="#modalBanner">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Banner</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="" data-toggle="modal" data-target="#modalStatistic">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Statistics</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href=""  data-toggle="modal" data-target="#modalService">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Services</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <a href="" data-toggle="modal" data-target="#modalExpert">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Experts</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="" data-toggle="modal" data-target="#modalPricing">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Pricings</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="" data-toggle="modal" data-target="#modalFaq">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>FAQs</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="" data-toggle="modal" data-target="#modalConfig">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Configs</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>


@endsection
