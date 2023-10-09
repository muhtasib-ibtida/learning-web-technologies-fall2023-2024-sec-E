<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>Email</legend>
    <form method="post" action="currentpagemail.php" enctype="">
       
    <input type="email" name="email" value="" /><img src="image\i.jpeg" height="15" title="Hint: sample@gmail.com"><br>
       
    <hr><input type="submit" name="" value="Submit" />
        
   
    </form>

    
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
</fieldset>
</body>
</html>