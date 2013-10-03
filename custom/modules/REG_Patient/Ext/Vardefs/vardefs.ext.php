<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-09-17 13:04:40
$dictionary["REG_Patient"]["fields"]["reg_labresults_reg_patient"] = array (
  'name' => 'reg_labresults_reg_patient',
  'type' => 'link',
  'relationship' => 'reg_labresults_reg_patient',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_REG_LABRESULTS_REG_PATIENT_FROM_REG_LABRESULTS_TITLE',
);


// created: 2013-09-17 13:04:39
$dictionary["REG_Patient"]["fields"]["reg_patient_reg_encounter"] = array (
  'name' => 'reg_patient_reg_encounter',
  'type' => 'link',
  'relationship' => 'reg_patient_reg_encounter',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_REG_PATIENT_REG_ENCOUNTER_FROM_REG_ENCOUNTER_TITLE',
);


// created: 2013-09-17 13:04:39
$dictionary["REG_Patient"]["fields"]["reg_patient_reg_sf12"] = array (
  'name' => 'reg_patient_reg_sf12',
  'type' => 'link',
  'relationship' => 'reg_patient_reg_sf12',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_REG_PATIENT_REG_SF12_FROM_REG_SF12_TITLE',
);


// created: 2013-09-17 13:04:39
$dictionary["REG_Patient"]["fields"]["reg_provider_reg_patient"] = array (
  'name' => 'reg_provider_reg_patient',
  'type' => 'link',
  'relationship' => 'reg_provider_reg_patient',
  'source' => 'non-db',
  'vname' => 'LBL_REG_PROVIDER_REG_PATIENT_FROM_REG_PROVIDER_TITLE',
  'id_name' => 'reg_provider_reg_patientreg_provider_ida',
);
$dictionary["REG_Patient"]["fields"]["reg_provider_reg_patient_name"] = array (
  'name' => 'reg_provider_reg_patient_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REG_PROVIDER_REG_PATIENT_FROM_REG_PROVIDER_TITLE',
  'save' => true,
  'id_name' => 'reg_provider_reg_patientreg_provider_ida',
  'link' => 'reg_provider_reg_patient',
  'table' => 'reg_provider',
  'module' => 'REG_Provider',
  'rname' => 'name',
);
$dictionary["REG_Patient"]["fields"]["reg_provider_reg_patientreg_provider_ida"] = array (
  'name' => 'reg_provider_reg_patientreg_provider_ida',
  'type' => 'link',
  'relationship' => 'reg_provider_reg_patient',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REG_PROVIDER_REG_PATIENT_FROM_REG_PATIENT_TITLE',
);


// created: 2013-09-17 13:04:38
$dictionary["REG_Patient"]["fields"]["reg_treatment_plan_reg_patient"] = array (
  'name' => 'reg_treatment_plan_reg_patient',
  'type' => 'link',
  'relationship' => 'reg_treatment_plan_reg_patient',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_REG_TREATMENT_PLAN_REG_PATIENT_FROM_REG_TREATMENT_PLAN_TITLE',
);


 // created: 2013-09-17 10:55:29

 
?>