<?php
  error_reporting(-1);
  ini_set('display_errors', 'On');

  require 'include/class.Country.php';

?>

<!DOCTYPE HTML>
<html dir="rtl" lang="ar">
<head>
	<meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Test</title>
</head>
<body>

  <select>
    <?php
      $countrieslist = getAllCountries();
      foreach ($countrieslist as $country) {
          echo '<option value="'.$country->code.'">'.$country->name.'</option>'."\n";
      }
    ?>
  </select>

</body>
</html>