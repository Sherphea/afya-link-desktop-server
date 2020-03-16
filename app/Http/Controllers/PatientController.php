<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function getAllPatients(){

        $patients = Patient::all();

        return response()->json(['patients' => $patients], 200);

    }

    public function getPatient($patientID){
        $patient = Patient::find($patientID);

        if (!$patient) return response()->json(['error' => 'Patient not Found'], 404);

        return response()->json(['patient' => $patient]);
    }

    public function postPatient(Request $request){

        $validator = Validator::make($request->all(), [
        'patient_no' => 'required|unique:patients',
        'first_name'=> 'required',
        'second_name'=> 'required',
        'last_name'=> 'required',
        'gender'=> 'required',
        'date_of_birth'=> 'required',
        'approximate_DOB'=> 'required',
        'patient_type' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 300);
        }

        $patient = new Patient();

        $patient->patient_no = $request->input('patient_no');
        $patient->first_name = $request->input('first_name');
        $patient->second_name = $request->input('second_name');
        $patient->last_name = $request->input('last_name');
        $patient->gender = $request->input('gender');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->approximate_DOB = $request->input('approximate_DOB');
        $patient->patient_type = $request->input('patient_type');

        $patient->save();

        return response()->json(['patient' => $patient], 201);
        
    }

    public function putPatient(Request $request, $patientID)
    {
        $patient = Patient::find($patientID);

        if (!$patient) return response()->json(['error' => 'Patient Not Found', 404]);

        $patient->update([
        'patient_no' => $request->input('patient_no'),
        'first_name' => $request->input('first_name'),
        'second_name' => $request->input('second_name'),
        'last_name' => $request->input('last_name'),
        'gender' => $request->input('gender'),
        'date_of_birth' => $request->input('date_of_birth'),
        'approximate_DOB' => $request->input('approximate_DOB'),
        'patient_type' => $request->input('patient_type')
        ]);

        return response()->json(['patient' => $patient], 201);
    }

    public function deletePatient($patientID){
        $patient = Patient::find($patientID);

        if (!$patient) return response()->json(['error' => 'Patient Not Found', 404]);
        $patient->delete();
        return response()->json(['patient' => 'Patient deleted successfully'], 201);
    }
}
