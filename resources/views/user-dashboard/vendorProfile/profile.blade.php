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

</style>

    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Vendor Dashboard</h2>
        <br><br>

        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Vendor Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name ?? '' }}" class="form-control"
                        id="inputAddress" placeholder="Name" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Vendor Email</label>
                    <input type="email" name="email" value="{{ Auth::user()->email ?? '' }}" class="form-control"
                        id="inputEmail4" placeholder="Email" readonly>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor Phone </label>
                    <input type="text" class="form-control" name="contact" value="{{ Auth::user()->contact ?? '' }}" placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor Bussiness Category </label>
                    <input type="text" class="form-control" name="contact" value="{{ $getVednorprofile['get_vednorbusinesscategory']['service']}}" placeholder="State" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor company </label>
                    <input type="text" class="form-control" name="company" value="{{ Auth::user()->company ?? '' }}" placeholder="State" readonly>
                </div>

            </div>
            <br>

            <div class="d-flex justify-content-end">
                <a href="{{route('edit-vendor-profile')}}" class="edit-submit-cstmbtn">Edit</a>
            </div>
        </form>
    </div>
@endsection

@push('scripts')

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
