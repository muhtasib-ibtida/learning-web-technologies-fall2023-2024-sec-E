<html>
<head>
    <title>HTML FORM</title>
</head>
<body><fieldset>
    <legend>Name</legend>
    <form method="post" action="currentpage.php" enctype="">
       
        <input type="text" name="name" value="" /> <br><hr>
        
        
        <input type="submit" name="" value="Submit" />
        
  
    </form>
    
    <?php

    $name= $_REQUEST['name'];

    if($name=="")
    {
        echo "Null value";
    }
    else
    {
        echo "Name is :".$name;
    }

?>
</fieldset>
</body>
</html>