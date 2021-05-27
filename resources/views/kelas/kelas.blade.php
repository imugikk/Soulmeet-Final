@extends('layouts.admin')

@section('title', 'Kelas')


@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Kelas</h5>
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
                            <form id="filter_content" enctype="multipart/form-data" method="post" action="/admin/kelas/store">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="title" class="form-label">Judul Kelas</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="desc" class="form-label">Desc Kelas</label>
                                        <textarea type="text" name="desc" class="form-control"> </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="durasi" class="form-label">Durasi Kelas</label>
                                        <input type="text" name="durasi" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label for="harga" class="form-label">Harga Kelas</label>
                                        <input type="text" name="harga" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label for="image" class="form-label">Thumbnail</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="rating" class="form-label">Rating Kelas</label>
                                        <input class="form-control" type="text"  name="rating">
                                    </div>
                                    <div class="col-6">
                                        <label for="pembicara" class="form-label">Pembicara</label>
                                        <select class="form-select form-control" aria-label="Default select example" name="id_pembicara">
                                            @foreach ($expert_details as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="requirement" class="form-label">Requirement</label>
                                        <textarea class="form-control" type="text" name="requirement"></textarea>
                                    </div>
                                </div>
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
                            </form>
                            <!--begin::Toolbar-->
                                <!--end::Toolbar-->
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
                <th scope="col">Judul</th>
                <th scope="col">Desc</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_kelas }}</td>
                    <td>{{ $item->desc_kelas }}</td>
                    <td>{{ $item->image_preview_kelas }}</td>
                    <td>
                        <a href="/admin/kelas/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="/admin/bab/{{ $item->id }}" class="btn btn-primary float-right mr-2">
                            <i class="fa fa-eye"></i>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit kelas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-update" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="title" class="form-label">Judul Kelas</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="desc" class="form-label">Desc Kelas</label>
                        <textarea type="text" id="desc" name="desc" class="form-control"> </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="image" class="form-label">Path Image</label>
                        <input type="text" id="image" name="image" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="durasi" class="form-label">Durasi Kelas</label>
                        <input type="text" id="durasi" name="durasi" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="harga" class="form-label">Harga Kelas</label>
                        <input type="text" id="harga" name="harga" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <label for="rating" class="form-label">Rating Kelas</label>
                        <input class="form-control" id="rating" type="text"  name="rating">
                    </div>
                    <div class="col-6">
                        <label for="pembicara" class="form-label">Pembicara</label>
                        <select class="form-select form-control" aria-label="Default select example" name="id_pembicara">
                            @foreach ($expert_details as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="requirement" class="form-label">Requirement</label>
                        <textarea class="form-control" type="text" id="requirement" name="requirement"></textarea>
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
        var url = '/admin/kelas/show/'+id;
        var link = '/admin/kelas/update/'+id;
        $.ajax({
            url : url,
            method: 'get',
            success: function(response) {
                $('#form-update').prop('action', link);
                $('#title').val(response.data['judul_kelas']);
                $('#desc').val(response.data['desc_kelas']);
                $('#durasi').val(response.data['durasi_kelas']);
                $('#harga').val(response.data['harga_kelas']);
                $('#image').val(response.data['image_preview_kelas']);
                $('#rating').val(response.data['rating_kelas']);
                $('#pembicara').val(response.data['pembicara']);
                $('#requirement').val(response.data['requirement_kelas']);
                $('#update-modal').modal('show');
            }
        });
    }
</script>

@endsection
