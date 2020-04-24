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
        <div class="container py-5">
            <div class="m-auto w-50 wu text-sm-justify text-md-center text-lg-center">
                <h4>
                    <b>
                        Coronavirus (COVID-19) Risk Assessment and Test Request Tool
                    </b>
                </h4>

                <p class="p">
                    The purpose of this online assessment is to identify whether you may be at risk for coronavirus (COVID-19) and provide options for next steps.
                </p>
                <p class="p">
                    The assessment <b>will take about 2 minutes to complete. Your responses will be anonymous and remain strictly confidential.</b>
                </p>
                <p class="p">
                    This assessment is being conducted by the Ministry of Health, Enugu State. If you have any questions about the assessment, please contact <a href="mailto:support@enugustate.gov.ng">support@enugustate.gov.ng</a>
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
