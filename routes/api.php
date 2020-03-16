<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Routes of allergy
Route::get('allergies', ['uses' => 'AllergyController@getAllAllergies']);
Route::post('allergy', ['uses' => 'AllergyController@postAllergy']);
Route::get('allergy/{allergyId}', ['uses' => 'AllergyController@getAllergy']);
Route::put('allergy/{allergyId}', ['uses' => 'AllergyController@putAllergy']);
Route::delete('allergy/{allergyId}', ['uses' => 'AllergyController@deleteAllergy']);

//Routes of contactInfo
Route::get('contactInfos', ['uses' => 'ContactInfoController@getAllContactInfos']);
Route::post('contactInfo', ['uses' => 'ContactInfoController@postContactInfo']);
Route::get('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@getContactInfo']);
Route::put('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@putContactInfo']);
Route::delete('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@deleteContactInfo']);

//Routes of diagnoses
Route::get('diagnoses', ['uses' => 'DiagnosisController@getAllDiagnoses']);
Route::post('diagnosis', ['uses' => 'DiagnosisController@postDiagnosis']);
Route::get('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@getDiagnosis']);
Route::put('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@putDiagnosis']);
Route::delete('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@deleteDiagnosis']);

//Routes of labs
Route::get('labs', ['uses' => 'LabController@getAllLabs']);
Route::post('lab', ['uses' => 'LabController@postLab']);
Route::get('lab/{labId}', ['uses' => 'LabController@getLab']);
Route::put('lab/{labId}', ['uses' => 'LabController@putLab']);
Route::delete('lab/{labId}', ['uses' => 'LabController@deleteLab']);

//Routes of medication
Route::get('medications', ['uses' => 'MedicationController@getAllMedications']);
Route::post('medication', ['uses' => 'MedicationController@postMedication']);
Route::get('medication/{medicationId}', ['uses' => 'MedicationController@getMedication']);
Route::put('medication/{medicationId}', ['uses' => 'MedicationController@putMedication']);
Route::delete('medication/{medicationId}', ['uses' => 'MedicationController@deleteMedication']);

//Routes of patients
Route::get('patients', ['uses' => 'PatientController@getAllPatients']);
Route::post('patient', ['uses' => 'PatientController@postPatient']);
Route::get('patient/{patientId}', ['uses' => 'PatientController@getPatient']);
Route::put('patient/{patientId}', ['uses' => 'PatientController@putPatient']);
Route::delete('patient/{patientId}', ['uses' => 'PatientController@deletePatient']);

//Routes of patientImages
Route::get('patientImages', ['uses' => 'PatientImageController@getAllPatientImages']);
Route::post('patientImage', ['uses' => 'PatientImageController@postPatientImage']);
Route::get('patientImage/{patientImageId}', ['uses' => 'PatientImageController@getPatientImage']);
Route::put('patientImage/{patientImageId}', ['uses' => 'PatientImageController@putPatientImage']);
Route::delete('patientImage/{patientImageId}', ['uses' => 'PatientImageController@deletePatientImage']);

//Routes of relatedPeople
Route::get('relatedPeople', ['uses' => 'RelatedPersonController@getAllRelatedPeople']);
Route::post('relatedPerson', ['uses' => 'RelatedPersonController@postRelatedPerson']);
Route::get('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@getRelatedPerson']);
Route::put('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@putRelatedPerson']);
Route::delete('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@deleteRelatedPerson']);

///Routes of visits
Route::get('visits', ['uses' => 'VisitController@getAllVisits']);
Route::post('visit', ['uses' => 'VisitController@postVisit']);
Route::get('visit/{visitId}', ['uses' => 'VisitController@getVisit']);
Route::put('visit/{visitId}', ['uses' => 'VisitController@putVisit']);
Route::delete('visit/{visitId}', ['uses' => 'VisitController@deleteVisit']);