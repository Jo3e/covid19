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
        <div class="container py-3 align-items-center">
            <div class="m-auto w-50 wu">
                
              <div id="step" class="q1">
                <h4>Question 1</h4>
                <p class="q font-weight-bold">
                  Do you have fever?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q2">
                <h4>Question 2</h4>
                <p class="q font-weight-bold">
                  Do you have cough or sore throat?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q3">
                <h4>Question 3</h4>
                <p class="q font-weight-bold">
                  Do you have shortness of breath or difficulty breathing?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q4">
                <h4>Question 4</h4>
                <p class="q font-weight-bold">
                  Have you or anyone you have been with come in contact with a confirmed case of COVID-19 infection?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q5">
                <h4>Question 5</h4>
                <p class="q font-weight-bold">
                  Have you traveled to any country or state with confirmed cases of COVID-19 in the last 14 days?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q6">
                <h4>Question 6</h4>
                <p class="q font-weight-bold">
                  In the past 14 days, have you or anyone you’ve been with come in contact with someone who returned from overseas (especially countries with 1000 or more confirmed cases)?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q7">
                <h4>Question 7</h4>
                <p class="q font-weight-bold">
                  Have you or anyone you have come in contact with been in the vicinity of a suspected COVID-19 case in the past 14 days?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q8">
                <h4>Question 8</h4>
                <p class="q font-weight-bold">
                  In the past 14 days, have you or anyone you have come in contact with been to a gathering that later had a confirmed positive case of COVID-19?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q9">
                <h4>Question 9</h4>
                <p class="q font-weight-bold">
                  In the last 14 days, have you or anyone you have come in contact with been to a healthcare facility where the COVID-19 case is reported or confirmed?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              <div id="step" class="q10">
                <h4>Question 10</h4>
                <p class="q font-weight-bold">
                  Have you been practicing social distancing?
                </p>

                <button type="button" class="btn answer btn-covid" value="yes" name="button">Yes</button><br>
                <button type="button" class="btn answer btn-covid-white" value="no" name="button">No</button>
              </div>

              {{-- risk levels --}}
              <div id="step" class="low-risk">
                <h3 class="text-success font-weight-bolder mb-4">
                  Your risk to COVID-19 infection is LOW.
                </h3>

                  <p class="p">
                      Do ensure the following to be safe; cover your nose and mouth with face masks, wash your hands regularly with running water and soap and when not available, use hand sanitizers. Avoid bringing your hands to your eyes, nose and mouth and always practice social distancing. <br> <b>Be safe</b>.
                  </p>
              </div>

              <div id="step" class="medium-risk">
                  <h3 class="text-warning font-weight-bolder">
                    Your risk to COVID-19 infection is MEDIUM.
                  </h3>

                  <p class="p">
                    Ensure to cover your nose and mouth with face masks, wash your hands regularly with running water and soap and when not available, use hand sanitizers. Avoid bringing your hands to your eyes, nose and mouth and always practice social distancing.<br><b>Be safe</b>.
                  </p>

                  <p class="p mt-2">
                    NB- To be safe, do check this assessment again in 2 days.
                  </p>
              </div>

              <div class="high-risk" id="step">
                  <h3 class="text-danger font-weight-bolder">
                      Your risk to COVID-19 infection is HIGH.
                  </h3>

                  <p class="p">
                       Fill in the test request form below immediately.
                  </p>
                  
                  {{-- collapse trigger --}}
                  <a href="#collapseRequest" 
                    class="btn btn-covid text-uppercase" 
                    data-toggle="collapse" 
                    aria-expanded="false" 
                    aria-controls="collapseRequest" 
                    role="button">
                    Request testing
                  </a>

                  {{-- collapse content --}}
                  <div class="collapse mt-4" id="collapseRequest">
                    <div class="container my-5">

                      <form action="{{ route('patients.store') }}" method="POST">
                        @csrf

                        <h4 class="text-center"><u>Personal Details</u></h4>

                        <div class="form-group">
                          <label for="p_name">Name</label>
                          <input type="text" class="form-control" id="p_name" name="p_name">
                        </div>

                        <div class="form-group">
                          <p>Gender</p>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="p_gender" value="male">
                            <label class="form-check-label" for="p_gender">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="p_gender" value="female">
                            <label class="form-check-label" for="p_gender">Female</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="p_address">Address</label>
                          <input type="text" class="form-control" id="p_address" name="p_address">
                        </div>

                        <div class="form-group">
                          <label for="p_phone">Phone</label>
                          <input type="tel" class="form-control" id="p_phone" name="p_phone">
                        </div>

                        <div class="form-group">
                          <label for="p_email">Email</label>
                          <input type="tel" class="form-control" id="p_email" name="p_email">
                        </div>

                        <h4 class="text-center"><u>Next of Kin</u></h4>

                        <div class="form-group">
                          <label for="n_name">Name</label>
                          <input type="text" class="form-control" id="n_name" name="n_name">
                        </div>

                        <div class="form-group">
                          <p>Gender</p>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="n_gender" value="male">
                            <label class="form-check-label" for="n_gender">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="n_gender" value="female">
                            <label class="form-check-label" for="n_gender">Female</label>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="n_address">Address</label>
                          <input type="text" class="form-control" id="n_address" name="n_address">
                        </div>

                        <div class="form-group">
                          <label for="n_phone">Phone</label>
                          <input type="tel" class="form-control" id="n_phone" name="n_phone">
                        </div>
                        
                        <button type="submit" class="btn btn-covid text-uppercase">send request</button>
                      </form>

                    </div>
                  </div>
              </div>
            </div>
        </div>
    </section>

    <section class="footer-area">
        <div class="container py-2">
            <h5 class="text-center text-white"><b>TEHELA LIMITED</b></h5>
        </div>
    </section>
@endsection
