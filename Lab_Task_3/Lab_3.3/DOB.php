
<?php

$dob1= $_REQUEST['dob1'];
$dob2= $_REQUEST['dob2'];
$dob3= $_REQUEST['dob3'];

if($dob1==""||$dob2==""||$dob3=="")
{
    echo "Null value";
}
else
{
    echo "Date of birth is :".$dob1."/".$dob2."/".$dob3;
}

?>