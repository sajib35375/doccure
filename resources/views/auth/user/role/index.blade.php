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
                        <h3 class="page-title">Welcome {{ Auth::user()->name }}!</h3>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                        <button id="modal_btn" class="btn btn-info">Add new Role</button>
                    </div>
                </div>
            </div>
            <div style="text-align: center;" class="row">
                <div class="col-lg-10">
                    @include('validate')
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
                                        <th>Slug</th>
                                        <th>Permission</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                    <tbody id="role_body">


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<div id="role_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>User Role</h4>
                <hr>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('role.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Role Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Set Permission</label>
                        <hr>
                        <input name="per[]" value="Teacher" type="checkbox" id="Teacher"><label for="Teacher">Teacher</label><br>
                        <input name="per[]" value="Student" type="checkbox" id="Student"><label for="Student">Student</label><br>
                        <input name="per[]" value="Staff" type="checkbox" id="Staff"><label for="Staff">Staff</label><br>
                        <input name="per[]" value="Accounts" type="checkbox" id="Accounts"><label for="Accounts">Accounts</label><br>
                        <input name="per[]" value="setting" type="checkbox" id="setting"><label for="setting">setting</label><br>
                    </div>
                    <div class="form-group">Accounts

                        <input name="submit" class="btn btn-success btn-block" type="submit" value="add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
