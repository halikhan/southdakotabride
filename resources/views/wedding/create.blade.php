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
<h3>Wedding</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Wedding </li>
<li class="breadcrumb-item active">list</li>
@endsection

@section('content')
<style>
    .for-ctm-height{
        max-height:200px !important;
        min-height:200px !important;
    }
    .cke_contents.cke_reset{
        max-height:200px !important;
        min-height:200px !important;
    }
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Create</h5>
            </div>
            {{-- <form class="form theme-form"> --}}
                <form class="form theme-form"id="" action="{{ route("wedding_store") }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Groom Name.*</label>
                                <input name="groom" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Groom">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Bride Name.*</label>
                                <input name="bride" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Bride">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">location.*</label>
                                <input name="location" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="location">
                                @error('location')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('title') }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Title Two.*</label>
                                <input name="title2" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="title">
                                @error('title2')
                                    <p class="help-block" style="color: red">
                                        {{ $errors->first('title2') }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Location.*</label>
                                <input name="location" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="location">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Date.*</label>
                                <input name="date" id="txt-appoint_date" class="form-control btn-square" id="exampleFormControlInput10" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Image.*</label>
                                <div class="col-sm-9">
                                    <input name="image" class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Image.*</label>
                                <div class="col-sm-9">
                                    <input type="file" name="wedding_image[]" class="myfrm form-control" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 mb-0">
                                {{-- ckeditor --}}
                                <label for="exampleFormControlTextarea14">Enter Description</label>
                                <textarea name="content" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3"></textarea>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
<script>
    $(document).ready(function() { //DISABLED PAST DATES IN APPOINTMENT DATE
        // alert('test');
    var dateToday = new Date();
    var month = dateToday.getMonth() + 1;
    var day = dateToday.getDate();
    var year = dateToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#txt-appoint_date').attr('min', maxDate);
    });

</script>
@endsection
