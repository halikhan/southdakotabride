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
    <h3>Video</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Video </li>
    <li class="breadcrumb-item active">list </li>
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
                                <h5>Video list</h5>
                            </div>
                            {{-- <div class="col-md-4" align="right">
                                <a type="button" class="btn btn-primary for-font-color" href="{{ route('videoCreate') }}"> Create</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        {{-- <th>Title</th> --}}
                                        <th>Video</th>
                                        <th>Content</th>
                                        <th>Created date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getVideo as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            {{-- <td>{{ $value->title }}</td> --}}
                                            <td>
                                                    @if ($value->video != null)
                                                    <video src="{{ asset('storage/uploads/video/' . $value->video) }}" alt="video" style="width:80px; height:80px;">
                                                    @else
                                                    <video src="{{ (!empty($Value->video))?
                                                        asset('storage/uploads/video/'.$Value->video):asset('storage/uploads/No-image.jpg') }}"
                                                        style="width:80px; height:80px;">
                                                    @endif
                                                </td>

                                            <td>{!! $value->content !!}</td>
                                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                            <td>
                                                {{-- <button class="btn btn-danger btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""><a  href="{{ route('videodestroy', $value->id) }}" id="delete">Delete</a></button> --}}
                                                <button class="btn btn-success btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="{{ route('videoEdit', $value->id) }}">Edit</a></button>
                                             </td>
                                        </tr>
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
