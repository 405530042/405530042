<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		margin:auto;
	}
	th,td:nth-child(n){ 
		text-align: left;
   		padding: 0.2em 0.5em 0.2em 0.5em;
		border-bottom: 1px solid;
	}
	tr:last-child td{
			border-bottom: 0px;
	}
	</style>
</head>
<body>
<?php
$data=array(
    array("Volvo",22,18),
	array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
	);
?>
<table>
<tr>
<th>Name</th>
<th>Stock</th>
<th>Sold</th>
</tr>
<tr>
<?php
for($i=0;$i<count($data);$i++)
	{
			echo
		'<tr>';
		for($j=0;$j<count($data[$i]);$j++)
		{
			echo
			'<td>'.$data[$i][$j].'</td>';		
	 	}
			echo
			'</tr>'	;
	}
?>
</tr>
</table>
<table>
	<th>Name</th>
<th>Stock</th>
<th>Sold</th>

<?php
foreach ($data as list($a, $b,$c)) {

    echo "<tr><td> $a</td><td> $b</td><td> $c</td></tr>";
}
 ?>
 </table>
 <table>
 	<th>Name</th>
<th>Stock</th>
<th>Sold</th>
 <?php 

 function scroegg($x){
  $tr='<tr>';
  $join=join("</td><td>",$x);
  $tr.="<td>".$join."</td>";
  $tr.="</tr>";
  return $tr;
 }

echo join("",array_map("scroegg",$data));
?>

</table>
</body>
</html>