<?php
function check_input($data, $problem = '')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0) {
        die($problem);
    }
    return $data;
}
/* ------------------------------------------
*
*  Validate URL in dns.php using check_input function
*
*--------------------------------------------*/
$website_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($d)) {
        $d = check_input($_POST["domain"]);
    }
}       if (empty($_POST["domain"])) {
    $website_err = " Domain is required.";
}else {
    $d = check_input($_POST["domain"]);
    $result = dns_get_record($d, DNS_CNAME);
}
//print_r($result);