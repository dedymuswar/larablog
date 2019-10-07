@extends('app')
@section('stylesheets')
<style>
    .mce-notification {
        display: none !important;
    }
</style>
@endsection
@section('title')
Create Post
@endsection
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Post</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header mb-10">
        <div>
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="book"></i></span></span>Create New Post</h4>
        </div>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                @if ($errors->any())
                <div class="alert alert-danger alert-wth-icon alert-dismissible" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-sm">
                        {!! Form::open(['action' => 'PostController@store', 'method' =>'POST','enctype' =>
                        'multipart/form-data']) !!}
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="judul" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Judul Post">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="slug" id="slug"
                                            placeholder="Slug">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Tag" class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-10 " data-select2-id="12">
                                        <select name="tags[]" class="select2 select2-multiple select2-hidden-accessible"
                                            multiple="multiple" data-placeholder="Choose" data-select2-id="4"
                                            tabindex="-1" aria-hidden="true">
                                            @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="form-control text-truncate" data-trigger="fileinput"><i
                                                    class="glyphicon glyphicon-file fileinput-exists"></i> <span
                                                    class="fileinput-filename"></span></div>
                                            <span class="input-group-append">
                                                <span class=" btn btn-primary btn-file"><span
                                                        class="fileinput-new">Select Image</span><span
                                                        class="fileinput-exists">Change</span>
                                                    <input type="file" name="cover_image">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists"
                                                    data-dismiss="fileinput">Remove</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <fieldset class="form-group mb-15">
                                        <div class="row">
                                            <label class="col-form-label col-sm-2 pt-0">Status</label>
                                            <div class="col-sm-4">
                                                <div class="custom-control custom-radio mb-5">
                                                    <input id="option_1" name="status" value="PUBLISHED"
                                                        class="custom-control-input" checked="" type="radio">
                                                    <label class="custom-control-label" for="option_1">Published</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-5">
                                                    <input id="option_2" name="status" value="PENDING"
                                                        class="custom-control-input" type="radio">
                                                    <label class="custom-control-label" for="option_2">Pending</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="option_3" name="status" value="DRAFT"
                                                        class="custom-control-input" type="radio">
                                                    <label class="custom-control-label" for="option_3">Draft</label>
                                                </div>
                                            </div>
                                            {!! Form::label('kategori', 'Kategori',['class' =>'col-form-label
                                            col-sm-2 pt-0 mt-1']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::select('kategori', $select, null, ['class'=>'form-control
                                                custom-select', 'placeholder' => '-Select Category-']) !!}
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>
                                <div class="form-group row">
                                    <label for="slug" class="col-sm-2 col-form-label">Body</label>
                                    <div class="col-sm-8">
                                        <textarea class="description" name="body" id="body"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">

                            </div>
                            <div class="form-group mb-0 col-sm-8">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
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

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea.description',
        width: 700,
        height: 300
    });
</script>
@endsection