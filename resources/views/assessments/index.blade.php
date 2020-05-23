@extends('layouts.app')

@section('content')
    {{-- content-area --}}
    <section class="header-area">
        <div class="container py-3">
            <h5 class="text-center">
                <b>
                    <a href="{{ url('/') }}" class="nav-items text-white">COVIA-19 RAPID RESPONSE</a>
                </b>
            </h5>
        </div>
    </section>

    <section class="content-area pt-sm-3">
        <div class="container py-3">
            <div class="m-auto w-50 wu text-sm-justify text-md-center text-lg-center">
                <h4>
                    <b>
                        Coronavirus (COVID-19) Risk Assessment and Test Request Tool
                    </b>
                </h4>

                <p class="p">
                    This is a COVID-19 assessment and test request tool which determines your risk factor to COVID-19 and measures to take in staying safe.
                </p>
                <p class="p">
                  This assessment will take about <b>2 minutes and all responses are anonymous and strictly confidential.</b>
                <p class="p">
                  This application should not be used for diagnostic purposes. <br>
                    If you have any question about the assessment, please contact <a href="mailto:support@enugustate.gov.ng">support@enugustate.gov.ng</a>
                </p>
                <a href="{{ route('assessments.create') }}" class="btn btn-covid text-center" role="button">NEXT</a>
            </div>
        </div>
    </section>

    <section class="footer-area">
        <div class="container py-2">
            <h5 class="text-center text-white"><b>TEHELA LIMITED</b></h5>
        </div>
    </section>
@endsection
