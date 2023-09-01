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
    <h3>Vendors</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Vendors </li>
    <li class="breadcrumb-item active">list </li>
@endsection

@section('content')
<style type="text/css">
    #pageloader {
  background:rgb(129 129 129 / 17%);
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
  top: 0;
  left: 0;
}

#pageloader img {
  left: 50%;
  /* margin-left: -32px;
          margin-top: -32px; */
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  filter: grayscale(1);
}
</style>
<div id="pageloader">
    <img src="{{asset('frontend/assets/1x/Preloader.gif') }}" alt="processing..." width="30%" height="60%"/>
</div>
    <div class="container-fluid">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>Vendors list</h5>
                            </div>
                            <div class="col-md-4" align="right">
                                <a type="button" class="btn btn-primary" href="{{ route('adminVendor-Create') }}">
                                     Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Bussiness Category</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getCMS as $key => $value)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->get_vednorbusinesscategory->service ?? ''}}</td>
                                            <td>{{ $value->email }}</td>

                                            <td><a href="{{ route('vendor_status', ['id' => $value->id]) }}">
                                                @if ($value->status == 1)
                                                    <button class="btn btn-info btn-sm regiterForm"><i class="fa fa-thumbs-up"></i></button>
                                                @else
                                                    <button class="btn btn-danger btn-sm regiterForm"><i class="fa fa-thumbs-down"></i></button>
                                                @endif
                                            </a></td>
                                            <td>
                                                @if ($value->image != null)
                                                <img src="{{ asset('storage/uploads/cms/' . $value->image) }}" alt="image" style="width:40%;">
                                                @else
                                                <img src="{{ (!empty($Value->image))?
                                                    asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg') }}"
                                                   style="width:40%;">
                                                @endif
                                            </td>
                                            <td>
                                                <a  href="{{ route('adminVendor-destroy', $value->slug) }}" id="delete"><button class="btn btn-danger btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button></a>
                                                <a href="{{ route('adminVendor-Edit', $value->slug) }}"> <button class="btn btn-success btn-xs for-font-color" type="button" data-original-title="btn btn-danger btn-xs" title=""> Edit</button></a>
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

    <script type="text/javascript">
        $("#regiterForm").on('click',function() {
             $("#pageloader").fadeIn();
        });
    </script>
@endsection
