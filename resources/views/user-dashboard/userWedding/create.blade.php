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

        .edit-submit-cstmbtn:hover {
            margin-top: 2rem;
            background-color: #d82e6b;
            font-family: "Solway-Bold";
            font-weight: 600;
            color: #ffffff;
        }

        .top-tabt-heading {
            color: #d82e6b;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

        #selectVendor.for-height-input {
            height: 100%;
            padding: 9px 25px;
        }
    </style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Create Cermonay</h2>
        <br><br>
        <input type="hidden" value="{{ csrf_token() }}" name="_token" id="token">
        <form action="{{ route('user_wedding_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="input-group hdtuto control-group lst increment">
                    <label for="inputImage">Image.*</label>
                    <input type="file" name="image" class="myfrm form-control">
                </div>
            </div>
            <div class="row">
                <div class="input-group hdtuto control-group mt-3 lst increment">
                    <label for="inputImage">Wedding Images.*</label>
                    <input type="file" name="wedding_image[]" class="myfrm form-control" multiple>
                </div>
            </div>
            <div class="row">
                <div class=" form-group col-md-12">
                    <label for="exampleFormControlInput10">Ceremony.*</label>
                    <select name="ceremony" id="" class="form-control ">
                        <option selected disabled>Select Type</option>
                        <option value="1">Wedding</option>
                        <option value="2">Engagement</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Groom Name.*</label>
                    <input name="groom" class="form-control btn-square" value="{{ old('groom') }}"
                        id="exampleFormControlInput10" type="text" placeholder="Groom">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Bride Name.*</label>
                    <input name="bride" class="form-control btn-square" value="{{ old('bride') }}"
                        id="exampleFormControlInput10" type="text" placeholder="Bride">
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Location.*</label>
                    <input name="location" class="form-control btn-square" value="{{ old('location') }}"
                        id="exampleFormControlInput10" type="text" placeholder="location">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput10">Wedding Date.*</label>
                    <input name="date" id="txt-appoint_date" class="form-control btn-square" value="{{ old('date') }}"
                        id="exampleFormControlInput10" type="date">
                </div>
            </div>

            <div class="row">
                <div class="add_item row align-center">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleFormControlInput10">Services.*</label>
                            <select name="service[]" type="text" class="form-select btn-square" id="validationDefault03"
                                placeholder="Bussiness Category" onchange="changeServiceType(this);">
                                <option selected disabled>Service Category</option>
                                @foreach ($getServiceNames as $value)
                                    <option data-id="{{ $value->id }}" value="{{ $value->id }}">
                                        {{ $value->service }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="exampleFormControlInput10">Vendors.*</label>
                            <select name="vendor[]" id="selectVendor" value="{{ old('vendors[]') }}"
                                class="form-control for-height-input">

                            </select>
                        </div>
                    </div>
                    <div class="col-md-2" style="padding-top: 50px;">
                        <div class="form-group">
                            <span class="btn btn-success addeventmore">
                                <i class="fa fa-plus-circle"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea14">Enter Description.*</label>
                    <textarea name="content" class="ckeditor form-control btn-square" value="{{ old('content') }}"
                        id="exampleFormControlTextarea14" rows="3"></textarea>
                </div>
            </div>

            <br>
            <button type="submit" class="btn btn-success">Submit</button>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
