<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Treatment;
use Illuminate\Http\Request;
use App\Http\Requests\AddPatientRequest;
use App\Policies\PatientPolicy;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::with('user')->latest()->paginate(5);

        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = new Patient();

        return view('patient.create',compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPatientRequest $request)
    {
        $request->user()->patients()->create($request->only('name', 'age', 'sex', 'address'));

        return redirect()->route('patients.index')->with('success', "New Patient Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        
        return view('patient.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        if(\Gate::allows('update-patient', $patient)) {
          return view('patient.edit', compact('patient'));
        }
        abort(403, "Access Denied");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(AddPatientRequest $request, Patient $patient)
    {
          $patient->update($request->only('name', 'age', 'sex', 'address'));

          return redirect()->route('patients.index')->with('success', "Patient Info Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')->with('success', "Patient has been Removed");
    }
}
