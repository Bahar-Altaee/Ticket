@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3>Users Daily Log</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Users</li>
    <li class="breadcrumb-item active">Daily Log</li>

@endsection
@section('content')


                    <div class="card"> 
                                <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">

                        <thead>
                        

                          <tr>
                            <th>Emploee</th>
                            <th>UserName</th>
                            <th>Event</th>
                            <th>Date</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach($employeeData as $f)
                          <tr>
                            <td>{{$f->emploee}}</td>
                            <td>{{$f->username}}</td>
                            <td>{{$f->event}}</td>
                            <td>{{$f->created_at}}</td>
                            @endforeach
                          </tr>
                        </tbody>
                       

                      </table>

                    </div>
                </div>
              </div>
@endsection
@section('script')
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>

@endsection
