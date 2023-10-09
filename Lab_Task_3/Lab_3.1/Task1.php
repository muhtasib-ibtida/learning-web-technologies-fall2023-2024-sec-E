
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