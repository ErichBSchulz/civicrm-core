<?php
/**
 * Test Generated example demonstrating the Tag.create API.
 *
 * @return array
 *   API result array
 */
function tag_create_example() {
  $params = array(
    'name' => 'Super Heros',
    'description' => 'Outside undie-wearers',
  );

  try{
    $result = civicrm_api3('Tag', 'create', $params);
  }
  catch (CiviCRM_API3_Exception $e) {
    // Handle error here.
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }

  return $result;
}

/**
 * Function returns array of result expected from previous function.
 *
 * @return array
 *   API result array
 */
function tag_create_expectedresult() {

  $expectedResult = array(
    'is_error' => 0,
    'version' => 3,
    'count' => 1,
    'id' => 12,
    'values' => array(
      '12' => array(
        'id' => '12',
        'name' => 'Super Heros',
        'description' => 'Outside undie-wearers',
        'parent_id' => '',
        'is_selectable' => '',
        'is_reserved' => '',
        'is_tagset' => '',
        'used_for' => 'civicrm_contact',
        'created_id' => '',
        'color' => '',
        'created_date' => '2013-07-28 08:49:19',
      ),
    ),
  );

  return $expectedResult;
}

/*
* This example has been generated from the API test suite.
* The test that created it is called "testCreate"
* and can be found at:
* https://github.com/civicrm/civicrm-core/blob/master/tests/phpunit/api/v3/TagTest.php
*
* You can see the outcome of the API tests at
* https://test.civicrm.org/job/CiviCRM-master-git/
*
* To Learn about the API read
* http://wiki.civicrm.org/confluence/display/CRMDOC/Using+the+API
*
* Browse the api on your own site with the api explorer
* http://MYSITE.ORG/path/to/civicrm/api
*
* Read more about testing here
* http://wiki.civicrm.org/confluence/display/CRM/Testing
*
* API Standards documentation:
* http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
*/
