<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//question 2//
    session_start();
    echo "<html>";

    //$myLogin = $_SESSION["myLogin"];
   // echo "Value of myLogin has been retrieved: ".$myLogin."\n";

   // $myColor = $_SESSION["myColor"];
   // echo "Value of MyColor has been retrieved: ".$myColor."\n";

   // echo "</html>\n";

  // $sid = session_id();
  // echo "Session ID returned by session_id(): ".$sid."\n </br>";
  // $sid = SID;
  // echo "Session ID returned by sid: ".$sid."\n";

$queryString = $_SERVER["QUERY_STRING"];
echo "Query string of the incoming URL: ".$queryString."\n";

echo "Cookies received:\n";
foreach ($_COOKIE as $name => $value) 
{
    echo "$name = $value\n";
}

   $myLogin = $_SESSION["myLogin"];
   print ("Value of myLogin has been retrieved: ".$myLogin."\n </br>");
   $myColor = $_SESSION["myColor"];
   echo "Value of myColor has been retrieved: ".$myColor."\n  </br>";

   echo "</html>\n";
   ?>
    
</body>
</html>