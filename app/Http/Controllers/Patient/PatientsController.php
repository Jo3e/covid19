<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Patient;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
          'p_name' => 'required',
          'p_address' => 'required',
          'p_gender' => 'required',
          'p_phone' => 'required',
          'p_email' => 'email',
          'n_name' => 'required',
          'n_address' => 'required',
          'n_gender' => 'required',
          'n_phone' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
          return back()->withErrors($validator)->withInput();
        }

        $patient = new Patient;

        $patient->p_name = request('p_name');
        $patient->p_address = request('p_address');
        $patient->p_gender = request('p_gender');
        $patient->p_phone = request('p_phone');
        $patient->p_email = request('p_email');
        $patient->n_name = request('n_name');
        $patient->n_address = request('n_address');
        $patient->n_gender = request('n_gender');
        $patient->n_phone = request('n_phone');

        $patient->save();

        // $patient = Patient::create([
        //   'p_name' => request('p_name'),
        //   'p_address' => request('p_address'),
        //   'p_gender' => request('p_gender'),
        //   'p_phone' => request('p_phone'),
        //   'p_email' => request('p_email'),
        //   'n_name' => request('n_name'),
        //   'n_address' => request('n_address'),
        //   'n_gender' => request('n_gender'),
        //   'n_phone' => request('n_phone'),
        // ]);

        // return response()->json([
        //   'code' => 200,
        //   'success' => 

        return redirect()->route('formReport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
