@extends('app')

@section('title')
Categories
@endsection
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    {{Breadcrumbs::render('categories', $categories)}}
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header mb-10">
        <div>
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="feather"></i></span></span>Categories</h4>
        </div>
        <div class="d-flex">
            <a href="javascript:void(0);" id="create-category" class="btn btn-primary btn-sm">Create New Category</a>
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
                                            <th>Category</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name_category}}</td>
                                            <td>
                                                {{date('j M, Y h:ia', strtotime($category->created_at))}}
                                            </td>
                                            <td>
                                                {{date('j M, Y h:ia', strtotime($category->updated_at))}}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="mr-25 edit-category" id="edit"
                                                    data-id="{{$category->id}}" data-original-title="Edit">
                                                    <i class="icon-pencil"></i></a>
                                                @role('admin')
                                                <a href="{{route('category.delete', $category->id)}}"
                                                    data-toggle="tooltip" data-original-title="Delete"><i
                                                        class="icon-trash txt-danger"></i>
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
                                        {{$categories->links()}}
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="category_add" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="titlemodal">Add Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formCategory">
                                    @csrf
                                    <input type="hidden" name="id_category" id="id_category">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-5 col-form-label">Name Category</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="category" id="category" class="form-control"
                                                id="category" placeholder="Category" autofocus>
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
<script src="{{asset('/js/app/category.js')}}"></script>
@endsection