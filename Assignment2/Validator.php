<?php


/**
 * A class to validate inputs enter
 */
class Validator {

  /**
   * Function to validate insertion.
   *
   * @return boolean
   */
  public function isValid(): bool {
    if (
      isset($_POST['submit'])
      && !empty($_POST['employee_code'])
      && !empty($_POST['employee_code_name'])
      && !empty($_POST['employee_domain'])
      && !empty($_POST['employee_id'])
      && !empty($_POST['employee_salary'])
      && !empty($_POST['employee_first_name'])
      && !empty($_POST['employee_last_name'])
      && !empty($_POST['graduation_percentile'])
    ) {
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
  public function isValidPattern():bool{
    if(
      preg_match("/(su_[a-z])\w+/", $_POST['employee_code']) ||
      preg_match("/(^[a-z]{2}_[a-z])\w+/", $_POST['employee_code_name']) ||
      preg_match("/[^\d][A-Z][a-z]/", $_POST['employee_domain']) ||
      preg_match("/RU[0-9]/", $_POST['employee_id']) ||
      preg_match("/[A-Z][a-z]/", $_POST['employee_first_name']) ||
      preg_match("/[A-Z][a-z]/", $_POST['employee_last_name']) ||
      preg_match("/^[0-9]*$/", $_POST['employee_salary']) ||
      preg_match("/^[0-9]*$/", $_POST['graduation_percentile'])
    ) {
        return TRUE;
    }
    else{
      return FALSE;
    }
  }
}
