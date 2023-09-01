@extends('user-dashboard.layouts.master')
@section('content')
    <style>
       .show-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #d82e6b;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }
    .add-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #2e61d8;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }
    .edit-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #033160;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    .delete-submit-cstmbtn a{
        margin-top: 2rem;
        margin-top: 2rem;
        background-color: #a30101;
    font-family: "Solway-Bold";

    color: #ffffff;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }


        .top-tabt-heading {
            color: #d82e6b;
            font-size: 58px;
            font-family: "JA-Hand-Reg";
        }

        div.gallery {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          width: 80px;
        }

        div.gallery:hover {
          border: 1px solid #777;
        }

        div.gallery img {
          width: 100%;
          height: auto;
        }

        div.desc {
          padding: 2px;
          text-align: center;
        }
        </style>

    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Ceremony Management</h2>
        <br><br>


                        <div class="col-md-12 add-submit-cstmbtn" align="right">
                            <a type="button" class="btn add-submit-cstmbtn" href="{{ route('user-wedding-create') }}">
                                 Add</a>
                        </div>



                        <br><br>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    {{-- <th>#</th> --}}
                                    <th>Groom</th>
                                    <th>Bride</th>
                                    <th>Type</th>
                                    <th>Ceremony Date</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-striped">
                                @foreach ($getWeddingdetails as $key=> $value)
                                    <tr>
                                        {{-- <td>{{ $key+1 }}</td> --}}


                                        <td>{{ $value->groom }}</td>

                                        <td>{{ $value->bride }}</td>
                                        <td>
                                            @if ($value->ceremony == 1 )
                                                Wedding Ceremony
                                            @else
                                                Engagement Ceremony
                                            @endif
                                            </td>
                                        <td>{{ $value->date }}</td>
                                        <td>
                                            <button class="btn delete-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title=""><a  href="{{ route('user_wedding_destroy', $value->slug) }}" id="delete">Delete</a></button>

                                            <button class="btn edit-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="{{ route('user_wedding_edit', $value->slug) }}">Edit</a></button>
                                            {{-- <button class="btn edit-submit-cstmbtn" type="button" data-original-title="btn btn-danger btn-xs" title=""> <a href="{{ route('user_wedding_edit', $value->id) }}">Edit</a></button> --}}
                                            <button class="btn show-submit-cstmbtn" type="button" data-original-title="btn btn-primary btn-xs" title=""> <a href="{{ route('user_wedding_show', $value->slug) }}">Show</a></button>
                                         </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
