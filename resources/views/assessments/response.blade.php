@extends('layouts.app')

@section('content')
	<section class="header-area">
		<div class="container py-3">
            <h5 class="text-center text-white">
                <b>
                    <a href="{{ url('/') }}" class="nav-items text-white">COVIA-19 RAPID RESPONSE</a>
                </b>
            </h5>
        </div>
	</section>

	<section class="content-area pt-sm-3">
		<div class="container py-3 align-items-center">
			<p class="p text-center text-success">
				Your test request has been received.
			</p>

			<p class="font-weight-bold text-center">
				Stay calm, isolate yourself from family and friends. Help is on the way.
			</p>
		</div>
	</section>

	<section class="footer-area">
        <div class="container py-2">
            <h5 class="text-center text-white"><b>TEHELA LIMITED</b></h5>
        </div>
    </section>
@endsection