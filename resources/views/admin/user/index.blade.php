@extends('app')

@section('title')
List User
@endsection
@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    {{Breadcrumbs::render('users',$users)}}
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header mb-10">
        <div>
            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                            data-feather="users"></i></span></span>List User</h4>
        </div>
        <div class="d-flex">
            <a href="{{route('user.create')}}" class="btn btn-primary btn-sm">Create New User</a>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Created at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @if ($user->roles->pluck('name')->implode('[]') == "admin")
                                                <div class="badge badge-success">
                                                    {{$user->roles->pluck('name')->implode('[]')}}
                                                </div>
                                                @elseif($user->roles->pluck('name')->implode('[]') == "user")
                                                <div class="badge badge-warning">
                                                    {{$user->roles->pluck('name')->implode('[]')}}</div>
                                                @endif
                                            </td>
                                            <td>{{date('j M, Y h:ia', strtotime($user->created_at))}}</td>
                                            <td>
                                                <a href="{{route('user.edit', $user->id)}}" class="mr-25"
                                                    data-toggle="tooltip" data-original-title="Edit"> <i
                                                        class="icon-pencil"></i> </a>
                                                @role('admin')
                                                <a href="{{route('user.delete', $user->id)}}" data-toggle="tooltip"
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
                                        {{$users->links()}}
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