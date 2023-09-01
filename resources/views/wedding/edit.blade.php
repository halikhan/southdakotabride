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
                <h5>Edit</h5>
            </div>
            {{-- <form class="form theme-form"> --}}
                <form class="form theme-form"id="" action="{{ route("wedding_update",$edit_data->id ) }}" enctype="multipart/form-data" method="post">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Groom Name.*</label>
                                <input name="groom" value="{{ $edit_data->groom }}"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Groom">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Bride Name.*</label>
                                <input name="bride" value="{{ $edit_data->bride }}" class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="Bride">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Location.*</label>
                                <input name="location" value="{{ $edit_data->location }}"  class="form-control btn-square" id="exampleFormControlInput10" type="text" placeholder="location">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput10">Date.*</label>
                                <input name="date" id="txt-appoint_date" value="{{ $edit_data->date }}"  class="form-control btn-square" id="exampleFormControlInput10" type="date">
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
                        <label class="col-sm-3 col-form-label">Update Image.*</label>
                        <div class="col-sm-9">
                            <input name="image" class="form-control" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                 <div class="col-md-12">
                    @if ($getUserWeddingimages->image != null)
                    @foreach(json_decode($getUserWeddingimages->image) as $image)
                 <img src="{{ asset('storage/uploads/cms/' .$image) }}" alt="image" style="width:120px; height:80px;">
                 @endforeach
                @else
                <img src="{{ (!empty($getUserWeddingimages->image))?
                    asset('storage/uploads/cms/'.$getUserWeddingimages->image):asset('storage/uploads/No-image.jpg') }}" style="width:80px; height:80px;">
                @endif
             </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Wedding Images.*</label>
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
                                <textarea name="content"  class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3">{!! $edit_data->content !!}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Update</button>
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
