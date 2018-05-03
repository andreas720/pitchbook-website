<?php
//connect to database.db name is images
        mysql_connect("localhost", "root", "Agg2vJKvGUng") OR DIE (mysql_error());
        mysql_select_db ("registerfacility") OR DIE ("Unable to select db".mysql_error());
//to retrive send the page to another page
if(isset($_POST['retrive']))
{
    header("location:search.php");

}

//to upload
if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['image_name'];
        $email=$_POST['mail'];
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
        }
               //$sql = "insert into facilities(
				$sql = " Update facilities set space_Img1 = '{$fp}' where facility_id = '3'";
                // our sql query
                            mysql_query($sql) or die("Error in Query insert: " . mysql_error());
							
} 
?>