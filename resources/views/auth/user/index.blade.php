@extends('layouts.app')

@section('content')
    <!-- Main Wrapper -->
{{--    <div class="main-wrapper">--}}

        @include('layouts.header')

        @include('layouts.menu')
    <div class="page-wrapper">

        <div class="content container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
            <div style="text-align: center;" class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Cell</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($user_data as $user)

                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->cell }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td><img style="width: 60px;height: 60px;" src="media/img/{{ $user->photo }}" alt=""></td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="#">view</a>
                                            <a class="btn btn-sm btn-warning" href="#">edit</a>
                                            <a class="btn btn-sm btn-danger" href="#">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
