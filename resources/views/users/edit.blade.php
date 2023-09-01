@extends('layouts.simple.master')
@section('title', 'Project List')
@section('title', 'Base Inputs')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Users</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Users </li>
<li class="breadcrumb-item active">list</li>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Edit</h5>
            </div>
            {{-- <form class="form theme-form"> --}}
                <form class="form theme-form"id="" action="{{ route("user_update",$edit_data->id ) }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Name.*</label>
                                <input name="name" class="form-control btn-square" id="exampleFormControlInput10" type="text" value="{{ $edit_data->name }}" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Email.*</label>
                                <input name="email" class="form-control btn-square"  value="{{ $edit_data->email }}" id="exampleFormControlInput10" type="text" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-3">
                    @if ($edit_data->image != null)
                     <img src="{{ asset('storage/uploads/cms/' . $edit_data->image) }}" alt="image" style="width:100px; height:100px;">
                    @else
                    <img src="{{ (!empty($edit_data->image))?
                        asset('storage/uploads/cms/'.$edit_data->image):asset('storage/uploads/No-image.jpg') }}" style="width:80px; height:80px;">
                    @endif
                 </div>
                </div>
                 <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Upload Image.*</label>
                                <div class="col-sm-9">
                                    <input name="image" class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Password.*</label>
                                <input name="password" class="form-control btn-square" value="" id="exampleFormControlInput10" type="password" placeholder="Password">
                                <input type="hidden" value="{{$edit_data->password}}" name="prevpassword">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Confirm Password.*</label>
                                <input name="confirm_password" class="form-control btn-square" value="" id="exampleFormControlInput10" type="password" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    {{-- <input class="btn btn-light" type="reset" value="Cancel"> --}}
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection
