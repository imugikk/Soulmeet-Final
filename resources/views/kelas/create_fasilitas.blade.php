@extends('layouts.admin')

@section('title', 'Pilih Fasilitas')

@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Pilih Fasilitas</h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
</div>

<div class="container">
    <form id="filter_content" action="/admin/kelas/fasilitas/store/{{ $id }}" method="POST">
    @csrf
    <table class="table table-sm table-hover table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fasilitas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_fasilitas }}</td>
                    <td class="text-center">
                        <input type="checkbox" name="fasilitas[]" id="item-{{$item->id}}" value="{{$item->id}}" class="form-check-input">
                        <label class="form-check-label" for="item-{{$item->id}}">Pilih</label>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary float-right mr-2" type="submit">Tambah</button>
    </form>
</div>
@endsection
