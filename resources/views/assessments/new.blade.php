@extends('layouts.app')

@section('content')
    {{-- content-area --}}
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
        <div class="container py-5 align-items-center">
            <div class="m-auto w-50 wu text-justify">
                <form action="{{ route('assessments.store') }}" method="post">
                    @csrf
                    <div id="step">
                        <p class="q font-weight-bold">
                            Have you or anyone you've been in close contact with travelled overseas in the last 14 days?
                        </p>
                        <p class="q">
                            Also answer 'Yes' if you have or someone you have been in close contact with has travelled through any overseas countries in the last 14 days, even if you or they remained within the airport.
                        </p>
                        <p class="q font-weight-bold">
                            If it has been more than 14 days since you travelled through any overseas countries, answer 'No'.
                        </p>
                        <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                        <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
                    </div>

                    <div id="step">
                        <p class="q font-weight-bold">
                            Have you or anyone you have come in contact with been in the vicinity of a suspected Coronavirus case in the past 14 days?
                        </p>

                        <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                        <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
                    </div>

                    <div id="step">
                        <p class="q font-weight-bold">
                            Have you come into close contact (within 6 feet) with someone who has a laboratory confirmed Coronavirus diagnosis in the past 14 days?
                        </p>

                        <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                        <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
                    </div>

                    <div id="step">
                        <p class="q font-weight-bold">
                            Are you currently experiencing any of the following symptoms:
                        </p>

                        <ol type="I">
                            <li>Fever</li>
                            <li>Flu-like symptoms, such as coughing, sore throat and fatigue</li>
                            <li>Shortness of breath.</li>
                        </ol>

                        <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                        <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
                    </div>

                    <div class="low-risk" id="step">
                        <h3 class="text-success font-weight-bolder">
                            No Worries!
                        </h3>
                        <p class="p">
                            Based on your responses, current recommendations are to practice social distancing and watch for symptoms and probably retake this assessment in four days.
                            Help is available. Get the latest information at the <a href="https://ncdc.gov.ng/" target="blank">NCDC website</a> or the state department website.
                        </p>
                    </div>

                    <div class="high-risk" id="step">
                        <h3 class="text-danger font-weight-bolder">
                            High Risk!
                        </h3>
                        <p class="p">
                            Based on your responses, you may need COVID-19 testing.
                            Help is available. Before you leave your home or current location,
                            please fill the form below or call <a href="tel:+2348182555550">0818-255-5550</a> or <a href="tel:+2349022333833">0902-233-3833</a> for immediate assistance.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="footer-area">
        <div class="container py-2">
            <h5 class="text-center text-white"><b>TEHELA LIMITED</b></h5>
        </div>
    </section>
@endsection
