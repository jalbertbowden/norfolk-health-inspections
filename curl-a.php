<?php  
$ch = curl_init("http://www.healthspace.com/Clients/VDH/Norfolk/Norolk_Website.nsf/Food-List-ByFirstLetterInName?OpenView&Count=100&RestrictToCategory=A");
$html = curl_exec($ch);
echo $html;
?>