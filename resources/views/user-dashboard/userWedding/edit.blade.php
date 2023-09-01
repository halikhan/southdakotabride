@extends('user-dashboard.layouts.master')
@section('content')

    <style>
        .edit-submit-cstmbtn {
            margin-top: 2rem;
            margin-top: 2rem;
            background-color: #d82e6b;
            font-family: "Solway-Bold";
            font-weight: 600;
            color: #ffffff;
            border-radius: 12px;
            padding: 8px 16px;
            font-size: 16px;
        }

        .update-submit-cstmbtn {
            margin-top: 2rem;
            margin-top: 2rem;
            background-color: #d82e6b;
            font-family: "Solway-Bold";
            font-weight: 600;
            color: #ffffff;
            border-radius: 12px;
            padding: 8px 16px;
            font-size: 16px;
        }

        #selectVendor.for-height-input {
            height: 100%;
            padding: 9px 25px;
        }

        .top-tabt-heading {
            color: #d82e6b;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

        #oldinputImage {
            visibility: hidden
        }

        .for-icone-position {
            position: relative;
            padding: 6px;
            margin-right: 10px;
        }

        .for-icone-position .close-icone {
            position: absolute;
            top: 0;
            right: 0;
            border-radius:50%;
            background-color: #d82e6b;
            padding:0px 6px;
        }

        .for-icone-position .close-icone i{
            color: #fff;
        }
    </style>

    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Edit Ceremony</h2>
        <br><br>
        <input type="hidden" value="{{ csrf_token() }}" name="_token" id="token">
        <form action="{{ route('user_wedding_update', $edit_data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    @if ($edit_data->image != null)
                        <img src="{{ asset('storage/uploads/cms/' . $edit_data->image) }}" alt="image"
                            style="width:20%">
                    @else
                        <img src="{{ !empty($edit_data->image)
                            ? asset('storage/uploads/cms/' . $edit_data->image)
                            : asset('storage/uploads/No-image.jpg') }}"
                            style="width:20% height:80px;">
                    @endif
                </div>
                <div class="input-group hdtuto control-group lst increment">
                    <label for="inputImage">Image</label>
                    <input type="file" name="image" class="myfrm form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex">
                        @if ($getUserWeddingimages->image)
                            @foreach (json_decode($getUserWeddingimages->image) as $image)
                                <div class="for-icone-position" >
                                    <img src="{{ asset('storage/uploads/cms/' . $image) }}" alt="image"
                                        style="width:200; height:100px;">

                                </div>
                            @endforeach
                        @else
                            <img src="{{ !empty($image) ? asset('storage/uploads/cms/' . $image) : asset('storage/uploads/No-image.jpg') }}"
                                style="width:80px; height:80px;">
                        @endif
                    </div>
                </div>
                <div class="input-group hdtuto control-group mt-3 lst increment">
                    <label for="inputImage">Wedding Images</label>
                    <input type="file" name="wedding_image[]" class="myfrm form-control" multiple>
                    <input type="hidden" name="old_wedding_image"
                        value="{{ $getUserWeddingimages->image }}"class="myfrm form-control" multiple>
                </div>
            </div>

            <div class="row">
                <div class=" form-group col-md-6">
                    <label for="exampleFormControlInput10">Ceremony.*</label>
                    <select name="ceremony" id="" class="form-control  btn-square">
                        <option selected disabled>Select Type</option>
                        <option value="1" {{ $edit_data->ceremony == '1' ? 'selected' : '' }}>Wedding</option>
                        <option value="2" {{ $edit_data->ceremony == '2' ? 'selected' : '' }}>Engagement</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Groom Name.*</label>
                    <input name="groom" value="{{ $edit_data->groom }}"class="form-control btn-square"
                        id="exampleFormControlInput10" type="text" placeholder="Groom">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Bride Name.*</label>
                    <input name="bride" value="{{ $edit_data->bride }}"class="form-control btn-square"
                        id="exampleFormControlInput10" type="text" placeholder="Bride">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Location.*</label>
                    <input name="location" value="{{ $edit_data->location }}"class="form-control btn-square"
                        id="exampleFormControlInput10" type="text" placeholder="location">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Wedding Date.*</label>
                    <input name="date" id="txt-appoint_date" value="{{ $edit_data->date }}"class="form-control btn-square"
                        id="exampleFormControlInput10" type="date">
                </div>
            </div>
            <div class="row">
                <div class="add_item row align-center">
                @foreach (json_decode($edit_data->service) as $key => $item)
                    @if ($key == 0)
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput10">Services.*</label>
                                        <select name="service[]" type="text" class="form-select btn-square"
                                            id="validationDefault03" placeholder="Bussiness Category"
                                            onchange="changeServiceType(this);">
                                            <option selected disabled>Service Category</option>
                                            @foreach ($getServiceNames as $value)

                                                <option data-id="{{ $value->id }}" value="{{ $value->id }}"
                                                    {{ $value->id == $item ? 'selected' : '' }}>
                                                    {{ $value->service }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput10">Vendors.*</label>
                                            <select name="vendor[]" id="selectVendor" class="form-control for-height-input">

                                                @foreach (json_decode($edit_data->vendor) as $item)

                                                    @foreach ($getvendorslist as $list)
                                                        @if ($item == $list->id)
                                                            <option value="{{ $list->id }}" {{ $list->id == $item ? 'selected' : '' }}>
                                                                            {{ $list->name }}
                                                            </option>

                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding-top: 50px;">
                                        <div class="form-group">
                                            <span class="btn btn-success addeventmore">
                                                <i class="fa fa-plus-circle"></i></span>
                                        </div>
                                    </div>
                        @else
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="" id="form-row">
                                    <div class="row">

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput10">Services.*</label>
                                                <select name="service[]" type="text" class="form-select btn-square"
                                                    id="validationDefault03" placeholder="Bussiness Category"
                                                    onchange="changeMultipleServcesType(this);">

                                                    @foreach ($getServiceNames as $value)
                                                        <option data-id="{{ $value->id }}"
                                                            value="{{ $value->id }}"
                                                            {{ $value->id == $item ? 'selected' : '' }}>
                                                            {{ $value->service }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>{{-- End form group --}}
                                        {{-- End col md 5 --}}
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput10">Vendors.*</label>
                                                <select name="vendor[]" id="selectMultipleVendor" class="form-control">
                                                    @foreach (json_decode($edit_data->vendor) as $item)
                                                        @foreach ($getvendorslist as $vendorslist)
                                                            @if ($item == $vendorslist->id)
                                                            <option value="{{ $vendorslist->id }}" {{ $list->id == $item ? 'selected' : '' }}>
                                                                {{ $vendorslist->name }}
                                                            </option>

                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div> {{-- End form group --}}
                                        </div> {{-- End col md 2 --}}

                                        <div class="col-md-2" style="padding-top: 45px;">
                                            <span class="btn btn-success addeventmore"><i
                                                    class="fa fa-plus-circle"></i></span>
                                            <span class="btn btn-danger removeeventmore"><i
                                                    class="fa fa-minus-circle"></i></span>
                                        </div> {{-- End col md 2 --}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea14">Enter Description</label>
                    <textarea name="content" class="ckeditor form-control btn-square" id="exampleFormControlTextarea14" rows="3">{!! $edit_data->content !!}</textarea>

                </div>
            </div>
            <br>
            <button type="submit" class="btn update-submit-cstmbtn">Update</button>
        </form>
    </div>
    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="" id="form-row">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput10">Services.*</label>
                                <select name="service[]" type="text" class="form-select btn-square"
                                    id="validationDefault03" placeholder="Bussiness Category"
                                    onchange="changeMultipleServcesType(this);">
                                    <option selected disabled>Service Category</option>
                                    @foreach ($getServiceNames as $value)
                                        <option data-id="{{ $value->id }}" value="{{ $value->id }}">
                                            {{ $value->service }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>{{-- End form group --}}

                        {{-- End col md 5 --}}
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="exampleFormControlInput10">Vendors.*</label>
                                <select name="vendor[]" id="selectMultipleVendor" class="form-control">

                                </select>
                            </div> {{-- End form group --}}
                        </div> {{-- End col md 2 --}}

                        <div class="col-md-2" style="padding-top: 45px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                        </div> {{-- End col md 2 --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() { //DISABLED PAST DATES IN APPOINTMENT DATE
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
    <script type="text/javascript">
     

        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
                $("#selectMultipleVendor").attr("id", "selectMultipleVendor" + counter);
                localStorage.setItem('count_item', counter);
            });
            $(document).on("click", '.removeeventmore', function(event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $('body').on('change', '#select_box', function() {
                $('#show_only').val(this.value);
            });
        });

        function changeMultipleServcesType(e) {

            MultiplevendorService = [];
            console.log(e)
            var dataid = $(e).find('option:selected').attr('data-id');
            var selectedValue = $(e).find('option:selected').attr('value');

            const TOKEN = $("#token").val();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": TOKEN
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('services_type_status') }}",
                dataType: "json",
                data: {
                    id: dataid,
                    value: selectedValue,
                },
                success: function(response) {

                    console.log(response);
                    $('#selectMultipleVendor' + localStorage.getItem('count_item')).html("");
                    response.data.map((val) => {
                        MultiplevendorService.push(val)
                    });
                    MultiplevendorService.map((val) => {
                        $('#selectMultipleVendor' + localStorage.getItem('count_item')).append(`<option value="${val.id}">
                ${val.name} </option>`)
                    });
                }

            });
            console.log(dataid);
            console.log(selectedValue);
        }

        function changeServiceType(e) {
            vendorService = [];
            console.log(e)
            var dataid = $(e).find('option:selected').attr('data-id');
            var selectedValue = $(e).find('option:selected').attr('value');
            const TOKEN = $("#token").val();
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": TOKEN
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('services_type_status') }}",
                dataType: "json",
                data: {
                    id: dataid,
                    value: selectedValue,
                },
                success: function(response) {
                    console.log(response);
                    $('#selectVendor').html("");
                    response.data.map((val) => {
                        vendorService.push(val)
                    });
                    vendorService.map((val) => {
                        $('#selectVendor').append(`<option value="${val.id}">
                    ${val.name} </option>`)
                    });
                }

            });
            console.log(dataid);
            console.log(selectedValue);
        }
    </script>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}')
            </script>
        @endforeach
    @endif

    @if (Session::has('user_updated'))
        <script>
            swal('User Profile', '{{ Session::get('user_updated') }}', 'success')
        </script>
    @endif

    @if (Session::has('user_error'))
        <script>
            swal('User Profile', '{{ Session::get('user_error') }}', 'success')
        </script>
    @endif

@endpush
