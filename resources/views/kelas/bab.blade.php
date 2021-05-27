@extends('layouts.admin')

@section('title', 'Bab')


@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Bab</h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <form id="filter_content" action="/admin/bab/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="kelas_id" class="form-control" value="{{ $id }}">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="judul" class="form-label">Judul Bab</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="desc" class="form-label">Desc Bab</label>
                                        <textarea type="text" name="desc" class="form-control"> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="durasi" class="form-label">Durasi Bab</label>
                                        <input type="text" name="durasi" class="form-control" placeholder="xxxx menit">
                                    </div>
                                    <div class="col-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center float-right">
                                        <!--begin::Button-->
                                        <!-- <a href="#" class=""></a> -->
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="submit" class="btn btn-light-primary font-weight-bold ml-2">
                                        Add
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Toolbar-->
                            </form>
                            <div id="resultContent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="form-pesan"></div>

<div class="container">
    <table class="table table-sm table-hover table-responsive-lg">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul Bab</th>
                <th scope="col">Desc Bab</th>
                <th scope="col">Durasi</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bab as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_bab }}</td>
                    <td>{{ $item->desc_bab }}</td>
                    <td>{{ $item->durasi_bab }}</td>
                    <td>{{ $item->image }}</td>
                    <td>
                        <a href="/admin/bab/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="/admin/subbab/{{ $item->id }}" class="btn btn-primary float-right mr-2">
                            <i class="fa fa-eye"></i>
                        </a>
                        <button onclick="edit('{{$item->id}}')" class="btn btn-success float-right mr-2"><i class="fa fa-pencil-alt"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card">
        <a href="/admin/kelas/fasilitas/create/{{ $id }}" class="btn btn-primary mb-2" style="width: 200px">
            Tambah Data Fasilitas
        </a>
        <table class="table table-sm table-hover table-responsive-lg">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasilitas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_fasilitas }}</td>
                        <td>
                            <a href="/admin/kelas/fasilitas/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Bab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-update" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="judul" class="form-label">Judul Bab</label>
                        <input type="text" id="judul" name="judul" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="desc" class="form-label">Desc Bab</label>
                        <textarea type="text" id="desc" name="desc" class="form-control"> </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="durasi" class="form-label">Durasi Bab</label>
                        <input type="text" id="durasi" name="durasi" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function edit(id){
        var url = '/admin/bab/show/'+id;
        var link = '/admin/bab/update/'+id;
        $.ajax({
            url : url,
            method: 'get',
            success: function(response) {
                $('#form-update').prop('action', link);
                $('#judul').val(response.data['judul_bab']);
                $('#desc').val(response.data['desc_bab']);
                $('#durasi').val(response.data['durasi_bab']);
                $('#update-modal').modal('show');
            }
        });
    }
</script>


@endsection
