<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePatientRuquest;
use Illuminate\Http\Request; //import Ruquests #Keep names Aa
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::paginate(10); // paginate returns the top five records 
        return view('patients.index', compact('patients')); // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRuquest $request)
    {
        // $request->validate([
        //     
        // ]);
        // dd($request);
        Patient::create($request->all());
         
        return redirect()->route('patients.index') 
                        ->with('success','Patient created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient=Patient::findOrFail($id);
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient=Patient::findOrFail($id);
        // dd($patient);
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
