<?php
     $Title = 'API-PHP-POSTMAN-ASSIGNMENT';
  // Submit a request to the API endpoint.
  $publicHolidayJSONString = file_get_contents('https://date.nager.at/api/v2/PublicHolidays/2017/AT');
  // Convert the response to a PHP object.
  $publicHolidayObject = json_decode( $publicHolidayJSONString );
  // Collect the first data in the array.
  $publicHoliday = $publicHolidayObject[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $Title ?></title>
</head>
<body>
  <h1><?php echo $Title ?></h1>
  <?php include './includes/navigation.php'; ?>
  <h2>Public Holidays API </h2>
    
    <dl>
        <dt>Date: </dt>
     <dd><?php echo $publicHoliday->date; ?></dd>
        <dt>LocalName: </dt>
    <dd><?php echo $publicHoliday->localName; ?></dd>
        <dt>Name: </dt>
    <dd><?php echo $publicHoliday->name; ?></dd>
      <dt>CountyCode: </dt>
    <dd><?php echo $publicHoliday->countryCode; ?></dd>
      <dt>Global: </dt>
    <dd><?php echo $publicHoliday->global; ?></dd>
      <dt>LaunchYear: </dt>
    <dd><?php echo $publicHoliday->launchYear; ?></dd>
      <dt>Type: </dt>
    <dd><?php echo $publicHoliday->type; ?></dd>
    
    </dl>

    
</body>
</html>
