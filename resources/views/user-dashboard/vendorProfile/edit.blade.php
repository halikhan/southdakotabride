@extends('user-dashboard.layouts.master')
@section('content')
<style>
    .edit-submit-cstmbtn {
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
        color: #fbf7f8;
    }
    .top-tabt-heading {
        color: #d82e6b;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

</style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Change Profile</h2>
        <br><br>

        <form action="{{ route('vendor_profile_update', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputImage"> Image</label>
                    <input type="file" name="image" class="form-control" id="inputImage" placeholder="Name">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Vendor Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name ?? '' }}" class="form-control"
                        id="inputAddress" placeholder="Name" >
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
                    {{-- <input type="text" class="form-control" name="contact" value="{{ Auth::user()->contact ?? '' }}"
                        placeholder="Vendor Phone" > --}}
                        <input id="phone12" class="form-control" type="tel" placeholder="Phone No." name="contact" value="{{ Auth::user()->contact ?? '' }}"  maxlength="14"  pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Vendor company </label>
                    <input type="text" class="form-control" name="company" value="{{ Auth::user()->company ?? '' }}"
                        placeholder="street 56, XYZ Block">
                </div>

            </div>
      
            <br>
            <button type="submit" class="btn edit-submit-cstmbtn">Update</button>
        </form>
    </div>

@endsection

@push('scripts')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>toastr.error('{{ $error }}')</script>
@endforeach
@endif

@if (Session::has('user_updated'))
    <script>swal('User Profile','{{ Session::get('user_updated') }}','success')</script>
@endif

@if (Session::has('user_error'))
    <script>swal('User Profile','{{ Session::get('user_error') }}','success')</script>
@endif
@endpush
@push('scripts')
<script type="text/javascript">
    document.getElementById('phone12').addEventListener('input', function(e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
</script>
@endpush
