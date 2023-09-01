@extends('user-dashboard.layouts.master')
@section('content')
<style>
    .edit-submit-cstmbtn {
        margin-top: 2rem;
        background-color: #6ED6D3;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #d82e6b;
        border-radius: 12px;
        padding: 8px 16px;
        font-size: 16px;
    }

    .edit-submit-cstmbtn:hover {
        margin-top: 2rem;
        background-color: #6ED6D3;
        font-family: "Solway-Bold";
        font-weight: 600;
        color: #d82e6b;
    }

    .top-tabt-heading {
        color: #d82e6b;
        font-size: 58px;
        font-family: "JA-Hand-Reg";
    }

.mySlides {display: none}
img {
vertical-align: middle;

}

/* Slideshow container */
.slideshow-container {
max-width: 600px;
position: relative;
margin: auto;
}

/* Next & previous buttons */
.prev, .next {
cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 18px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
}

/* Position the "next button" to the right */
.next {
right: 0;
border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
color: #f2f2f2;
font-size: 15px;
padding: 8px 12px;
position: absolute;
bottom: 8px;
width: 100%;
text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
color: #f2f2f2;
font-size: 12px;
padding: 8px 12px;
position: absolute;
top: 0;
}

/* The dots/bullets/indicators */
.dot {
cursor: pointer;
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
transition: background-color 0.6s ease;
}

.active, .dot:hover {
background-color: #717171;
}

/* Fading animation */
.fade {
animation-name: fade;
animation-duration: 1.5s;
}

@keyframes fade {
from {opacity: .4}
to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
.prev, .next,.text {font-size: 11px}
}
.pink-submit-cstmbtn {
    margin-top: 2rem;
    background-color: #d82e6b;
    font-family: "Solway-Bold";
    font-weight: 600;
    color: #ffffff;
    border-radius: 12px;
    padding: 8px 16px;
    font-size: 16px;
}
</style>
    <div class="for-content-tabs">
        <h2 class="top-tabt-heading">Vendor Gallery</h2>
        <br><br>
             <div class="row">
            <div class="slideshow-container">
                @if ($getvendorimages)
                @foreach(json_decode($getvendorimages->image) as $image)
                <div class="mySlides">
                    <img src="{{ asset('storage/uploads/cms/'.$image)}}" width="300px;" height="200px;">
                </div>
                @endforeach
                @else
                    <div class="mySlides">
                        <img src="{{ (!empty($image))?
                            asset('storage/uploads/cms/'.$image):asset('storage/uploads/No-gallery.png') }}">
                    </div>

                @endif
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                </div>
                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>
        </div>
       
        <form action="{{ route('vendor_gallery_update', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="inputImage">Update Images</label>
                    <input type="file" name="wedding_image[]" class="myfrm form-control" multiple>
                </div>
            </div>

            <br>
            <button type="submit" class="btn pink-submit-cstmbtn">Update</button>
        </form>
    </div>
@endsection

@push('scripts')
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>
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
