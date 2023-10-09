
<?php

$mail= $_REQUEST['email'];

if($mail=="")
{
    echo "Null value";
}
else
{
    echo "Email is :".$mail;
}

?>