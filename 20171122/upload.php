<?php
extract($_POST);
if($height==""||$weight=="")
{
	echo "please type in all information";
}
else{
	echo "身高:" .($height/100) ."M<br/>";
	echo "體重:$weight Kg<br/>";
	echo "BMI:".$weight/($height*$height)."<br>";

}
if($_FILES["file"]["error"]==4)
{
echo "empty";
}
else if(strstr($_FILES["file"]["type"],"image")==false)
{
	echo "wrong file type";
}
else
{
	$filename= $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
	echo '<img src="upload/'.$filename.'"/>';
}
?>