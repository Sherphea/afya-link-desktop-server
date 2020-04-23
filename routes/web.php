<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    //Routes of allergy
    $router->get('allergies', ['uses' => 'AllergyController@getAllAllergies']);
    $router->post('allergy', ['uses' => 'AllergyController@postAllergy']);
    $router->get('allergy/{allergyId}', ['uses' => 'AllergyController@getAllergy']);
    $router->put('allergy/{allergyId}', ['uses' => 'AllergyController@putAllergy']);
    $router->delete('allergy/{allergyId}', ['uses' => 'AllergyController@deleteAllergy']);

    //Routes of contactInfo
    $router->get('contactInfos', ['uses' => 'ContactInfoController@getAllContactInfos']);
    $router->post('contactInfo', ['uses' => 'ContactInfoController@postContactInfo']);
    $router->get('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@getContactInfo']);
    $router->put('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@putContactInfo']);
    $router->delete('contactInfo/{contactInfoId}', ['uses' => 'ContactInfoController@deleteContactInfo']);

    //Routes of diagnoses
    $router->get('diagnoses', ['uses' => 'DiagnosisController@getAllDiagnoses']);
    $router->post('diagnosis', ['uses' => 'DiagnosisController@postDiagnosis']);
    $router->get('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@getDiagnosis']);
    $router->put('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@putDiagnosis']);
    $router->delete('diagnosis/{diagnosisId}', ['uses' => 'DiagnosisController@deleteDiagnosis']);

    //Routes of labs
    $router->get('labs', ['uses' => 'LabController@getAllLabs']);
    $router->post('lab', ['uses' => 'LabController@postLab']);
    $router->get('lab/{labId}', ['uses' => 'LabController@getLab']);
    $router->put('lab/{labId}', ['uses' => 'LabController@putLab']);
    $router->delete('lab/{labId}', ['uses' => 'LabController@deleteLab']);

    //Routes of medication
    $router->get('medications', ['uses' => 'MedicationController@getAllMedications']);
    $router->post('medication', ['uses' => 'MedicationController@postMedication']);
    $router->get('medication/{medicationId}', ['uses' => 'MedicationController@getMedication']);
    $router->put('medication/{medicationId}', ['uses' => 'MedicationController@putMedication']);
    $router->delete('medication/{medicationId}', ['uses' => 'MedicationController@deleteMedication']);

    //Routes of patients
    $router->get('patients', ['uses' => 'PatientController@getAllPatients']);
    $router->post('patient', ['uses' => 'PatientController@postPatient']);
    $router->get('patient/{patientId}', ['uses' => 'PatientController@getPatient']);
    $router->put('patient/{patientId}', ['uses' => 'PatientController@putPatient']);
    $router->delete('patient/{patientId}', ['uses' => 'PatientController@deletePatient']);

    //Routes of patientImages
    $router->get('patientImages', ['uses' => 'PatientImageController@getAllPatientImages']);
    $router->post('patientImage', ['uses' => 'PatientImageController@postPatientImage']);
    $router->get('patientImage/{patientImageId}', ['uses' => 'PatientImageController@getPatientImage']);
    $router->put('patientImage/{patientImageId}', ['uses' => 'PatientImageController@putPatientImage']);
    $router->delete('patientImage/{patientImageId}', ['uses' => 'PatientImageController@deletePatientImage']);

    //Routes of relatedPeople
    $router->get('relatedPeople', ['uses' => 'RelatedPersonController@getAllRelatedPeople']);
    $router->post('relatedPerson', ['uses' => 'RelatedPersonController@postRelatedPerson']);
    $router->get('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@getRelatedPerson']);
    $router->put('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@putRelatedPerson']);
    $router->delete('relatedPerson/{relatedPersonId}', ['uses' => 'RelatedPersonController@deleteRelatedPerson']);

    ///Routes of visits
    $router->get('visits', ['uses' => 'VisitController@getAllVisits']);
    $router->post('visit', ['uses' => 'VisitController@postVisit']);
    $router->get('visit/{visitId}', ['uses' => 'VisitController@getVisit']);
    $router->put('visit/{visitId}', ['uses' => 'VisitController@putVisit']);
    $router->delete('visit/{visitId}', ['uses' => 'VisitController@deleteVisit']);

    $router->get('inventories', ['uses' => 'InventoryController@getAllInventories']);
    $router->get('invoiceItems', ['uses' => 'InvoiceItemController@getInvoiceItems']);
});
