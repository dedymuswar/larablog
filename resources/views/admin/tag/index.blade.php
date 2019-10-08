@extends('app')

@section('title')
Tag
@endsection
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    {{Breadcrumbs::render('tags', $tags)}}
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header mb-10">
        <div>
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="paperclip"></i></span></span>Tags</h4>
        </div>
        <div class="d-flex">
            <a href="javascript:void(0);" id="create-tag" class="btn btn-primary btn-sm">Create New Tag</a>
            {{-- <button class="btn btn-primary btn-sm">Create New</button> --}}
        </div>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                {{-- <h5 class="hk-sec-title">Small table</h5>
                <p class="mb-40">Add class <code>.table-sm</code> to make tables more compact by cutting cell padding in
                    half.</p> --}}
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tag</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $tag)
                                        <tr>
                                            <td>{{$tag->id}}</td>
                                            <td>{{$tag->name}}</td>
                                            <td>
                                                {{date('j M, Y h:ia', strtotime($tag->created_at))}}
                                            </td>
                                            <td>
                                                {{date('j M, Y h:ia', strtotime($tag->updated_at))}}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-25 edit-tag" id="edit"
                                                    data-id="{{$tag->id}}" data-original-title="Edit">
                                                    <i class="icon-pencil"></i></a>
                                                @role('admin')
                                                <a href="{{route('tag.delete', $tag->id)}}" data-toggle="tooltip"
                                                    data-original-title="Delete"><i class="icon-trash txt-danger"></i>
                                                </a>
                                                @endrole
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav class="pagination-wrap justify-content-end mt-10 mb-25"
                                    aria-label="Page navigation example">
                                    <ul class="pagination">
                                        {{$tags->links()}}
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="tag_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titlemodal">Add Tag</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formTag">
                                    @csrf
                                    <input type="hidden" name="id_tag" id="id_tag">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Name Tag</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="tag" id="tag" class="form-control" id="tag"
                                                placeholder="Tag" autofocus>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->
@endsection
@section('scriptjs')
<script src="{{asset('/js/app/tag.js')}}"></script>
@endsection