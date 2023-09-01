@extends('layouts.simple.master')
@section('title', 'Project List')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rating.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Coach</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Coach</li>
    <li class="breadcrumb-item active">Show </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">

                        <div class="row">
                            <div class="col-md-8">
                                <h5>Show Coach Details </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Time Slot</th>
                                        <th>Contact</th>
                                        {{-- <th>Address</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($show_data  as $collection )
                                        @foreach ($collection->admin_coachData  as $key=> $coachData )
                                        <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                        @if ($coachData->get_admin_show_Students->type==2)
                                        Student
                                        @elseif ($coachData->get_admin_show_Students->type==3)
                                        Coach
                                        @elseif ($coachData->get_admin_show_Students->type==4)
                                        Evaluator
                                        @endif
                                    </td>
                                        {{-- <td>{{ $get_message->get_coach->type }}</td> --}}
                                        <td>{{ $coachData->get_admin_show_Students->name ??''}}</td>
                                        <td> {{ $coachData->get_admin_show_Students->email ??''}}</td>
                                        <td>{{ $coachData->get_timeSlot->appoinment_date ??''}} -- {{ $coachData->get_timeSlot->appoinment_time ??''}}</td>
                                        <td> {{ $coachData->get_admin_show_Students->contact ??''}}</td>
                                    </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>
@endsection



@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
    <script src="{{ asset('assets/js/product-list-custom.js') }}"></script>
@endsection
