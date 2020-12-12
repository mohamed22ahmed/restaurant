@extends('layouts.dashboard.app')
@section('content')
    <div class="container-fluid col-md-10">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div style="overflow-x:auto !important">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title float-left">Users</h3>

                            <div class="card-tools float-right">
                                <a class="btn btn-success" href="">Add New &nbsp;&nbsp;<i class="fa fa-plus" ></i></a>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Expire Date</th>
                                        <th>Modify</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
