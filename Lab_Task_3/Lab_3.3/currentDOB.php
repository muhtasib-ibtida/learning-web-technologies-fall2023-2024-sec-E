<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>Date of birth</legend>
    <form method="post" action="currentdob.php" enctype="">
       
        <input type="number" name="dob1" value="" />/<input type="number" name="dob2" value="" />/<input type="number" name="dob3" value="" /> <br>
       
       <hr> <input type="submit" name="" value="Submit" />
        
   
    </form>


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
</fieldset>
</body>
</html>