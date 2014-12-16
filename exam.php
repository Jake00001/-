<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-hover">
<thead>
<tr>
<th>katlog</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<?php
    $json = file_get_contents("Z:\data.json");
    $json = (array) json_decode($json, true);

    for ($i = 0; $i <= 7; $i++) {
    	if ($json[$i]["price"] >= 25000){
     	echo $json[$i]["price"];
     	$pfoto = $json["$i"]["picture"];
     echo "<img src='".$pfoto."'/>"."<BR>";
     echo $json[$i]["rating"] ."<BR>";
     echo $json[$i]["model"] ."<BR>";
     echo "<HR>";
     
 }
}
     
?>
</td>
</tr>
</tbody>
</table>
