<?php
$getCopyrights = App\Models\Config::all();

// dd($logo_add);
?>

<footer class="footer">
	  <div class="container-fluid">
		    <div class="row">
			      {{-- <div class="col-md-12 footer-copyright text-center">
			        	<p class="mb-0">Copyright {{ date('Y') }} © Cuba theme by pixelstrap  </p>
			      </div> --}}
                  @foreach ($getCopyrights as $Copyright )
                  <div class="col-md-12 footer-copyright text-center">
                      <span>{{ $Copyright->email_one }}</span>
                      <br />
                      Design & Development by<a href="https://designprosusa.com/" target="_blank"> Design Pros
                          USA</a>
                  </div>
                  @endforeach
		    </div>
	  </div>
</footer>
