<html >
<head>
<title>Process USD to CAD Conversion</title>
</head>
<body>
<h2 style = "text-align:center">Process Conversion Data</h2>
<?php
$errors = 0;
if (is_numeric($_POST['USD'])) {
     if (($_POST['USD']) >= 0) {
          $USD = round($_POST['USD'],2);
          
     }
     else {
          ++$errors;
          echo "<p>Error: 'Amount in USD' must be greater than or equal to 0</p>\n";
     }
}
else {
     ++$errors;
     echo "<p>Error: 'Amount in USD' must be a numeric value</p>\n";
}

if ($errors==0) {
   echo "<p>The converted amount in CAD is : $" . ($USD*1.24) . " CAD<br />\n"; 
   
}
?>
<p><a href="USDtoCADconverter.html">Calculate another conversion</a></p>
<br/>
<p><a href="Homepage.html">Go back to Homepage</a></p>
</body>
</html>
