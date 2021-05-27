@extends('layouts.admin')

@section('title', 'Fasilitas')


@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Fasilitas</h5>
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
                            <form id="filter_content" action="/admin/fasilitas/store" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="ikon" class="form-label">Ikon</label>
                                        <input type="text" name="ikon" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nama Fasilitas</label>
                                        <textarea type="text" name="name" class="form-control"> </textarea>
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
                <th scope="col">Ikon</th>
                <th scope="col">Fasilitas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fasilitas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->ikon_fasilitas }}</td>
                    <td>{{ $item->nama_fasilitas }}</td>
                    <td>
                        <a href="/admin/fasilitas/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                            <i class="fa fa-trash"></i>
                        </a>
                        <button onclick="edit('{{$item->id}}')" class="btn btn-success float-right mr-2"><i class="fa fa-pencil-alt"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Fasilitas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-update" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="ikon" class="form-label">Ikon</label>
                        <input type="text" id="ikon" name="ikon" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="name" class="form-label">Nama Fasilitas</label>
                        <input type="text" id="name" name="name" class="form-control">
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
        var url = '/admin/fasilitas/show/'+id;
        var link = '/admin/fasilitas/update/'+id;
        $.ajax({
            url : url,
            method: 'get',
            success: function(response) {
                $('#form-update').prop('action', link);
                $('#ikon').val(response.data['ikon_fasilitas']);
                $('#name').val(response.data['nama_fasilitas']);
                $('#update-modal').modal('show');
            }
        });
    }
</script>


@endsection
