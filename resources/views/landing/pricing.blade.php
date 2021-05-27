@extends('layouts.admin')

@section('title', 'Pricing')


@section('content')

<div id="form-main">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mr-5">Pricing</h5>
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
                            <form id="filter_content" action="/admin/pricing/store" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <textarea type="text" name="subtitle" class="form-control"> </textarea>
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
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pricings as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->subtitle }}</td>
                    <td>
                        @if ( $item->st == 1)
                            <strong>Actived</strong>
                        @else
                            Deactived
                        @endif
                    </td>
                    <td>
                        <a href="/admin/pricing/delete/{{ $item->id }}" class="btn btn-danger float-right mr-2">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="/admin/pricing-detail/{{ $item->id }}" class="btn btn-primary float-right mr-2">
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Pricing</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-update" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <textarea type="text" id="subtitle" name="subtitle" class="form-control"> </textarea>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="isActive" name="isActive">
                    <label class="form-check-label" for="isActive">
                        Active
                    </label>
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
        var url = '/admin/pricing/show/'+id;
        var link = '/admin/pricing/update/'+id;
        $.ajax({
            url : url,
            method: 'get',
            success: function(response) {
                $('#form-update').prop('action', link);
                $('#title').val(response.data['title']);
                $('#subtitle').val(response.data['subtitle']);
                if(response.data['st']==1){
                    $("#isActive").prop("checked", true);
                } else {
                    $("#isActive").prop("checked", false);
                }
                $('#update-modal').modal('show');
            }
        });
    }
</script>


@endsection
