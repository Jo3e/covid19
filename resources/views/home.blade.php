@extends('layouts.dashboard')

@section('content')
    <section class="content-area py-4 mb-5 mb-md-5 mb-lg-0">
        <div class="container">
            <div class="card-deck mb-3">
              <div class="card shadow-sm">
                <div class="card-body text-center">
                  <h5 class="font-weight-bold text-default"></h5>
                  <h4>ACCESSED</h4>
                </div>
              </div>
              <div class="card shadow-sm">
                <div class="card-body text-center">
                  <h1 class="font-weight-bold text-danger">
                    {{ number_format($totalTestRequest, 2, '.', ',') }}
                  </h1>
                  <h4>TEST REQUEST</h4>
                </div>
              </div>
              <div class="card shadow-sm">
                <div class="card-body text-center">
                  <h5 class="font-weight-bold text-success"></h5>
                  <h4>TESTED</h4>
                </div>
              </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($patients as $patient)
                      <tr>
                        <th scope="row">{{ $patient->id }}</th>
                        <td><a href="#">{{ $patient->p_name }}</a></td>
                        <td>{{ $patient->p_gender }}</td>
                        <td>{{ $patient->p_phone }}</td>
                        <td>{{ $patient->p_address }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
