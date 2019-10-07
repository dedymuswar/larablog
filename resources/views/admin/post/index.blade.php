@extends('app')

@section('title')
List Post
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
                            data-feather="book"></i></span></span>Post</h4>
        </div>
        <div class="d-flex">
            <a href="{{route('post.create')}}" class="btn btn-primary btn-sm">Create Post</a>
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
                                            <th>Judul</th>
                                            <th>Created at</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                        <tr>
                                            <td>{!! Str::limit($post->title, 50, ' ...')!!}</td>
                                            <td>{{date('j M, Y h:ia', strtotime($post->created_at))}}</td>
                                            <td>{{$post->category->name_category}}</td>
                                            <td>
                                                @if ($post->status == "PUBLISHED")
                                                <div class="badge badge-success">{{strtolower($post->status)}}</div>
                                                @elseif($post->status == "PENDING")
                                                <div class="badge badge-warning">{{strtolower($post->status)}}</div>
                                                @else
                                                <div class="badge badge-danger">{{strtolower($post->status)}}</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('post.edit', $post->id)}}" class="mr-25"
                                                    data-toggle="tooltip" data-original-title="Edit"> <i
                                                        class="icon-pencil"></i> </a>
                                                @role('admin')
                                                <a href="{{route('post.delete', $post->id)}}" data-toggle="tooltip"
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
                                        {{$posts->links()}}
                                    </ul>
                                </nav>

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