@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ Auth::user()->name }}</div>

                    <div class="card-body">
                        <img style="max-width: 100%;" src="media/img/{{ Auth::user()->photo }}" alt="">
                        <table class="table table-stripe" >
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user()->cell }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user()->username }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
