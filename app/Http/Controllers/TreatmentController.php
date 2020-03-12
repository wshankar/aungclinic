<?php

namespace App\Http\Controllers;

use App\Treatment;
use App\Patient;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Patient $patient, Request $request)
    {
        $request->validate([ 'treatment' => 'required', 'fees' => 'required']);
        $patient->treatments()->create([ 'treatment' => $request->treatment, 'fees' => $request->fees]);

        return back()->with('success', "Treatment has been Saved");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
     /*
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient, Treatment $treatment)
    {
        return view('treatment.edit', compact('patient', 'treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient, Treatment $treatment)
    {
        $treatment->update($request->validate(['treatment'=> 'required', 'fees'=> 'required']));
        return redirect()->route('patients.show', $patient->id)->with('success', "Treatment Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {

    }
}
