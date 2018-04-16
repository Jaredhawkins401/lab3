<?php
$table = "<table>\n";  
$table .= "<tbody>";
$table .= "<tr>" . "<td>" . "<b>" ."Corporation" . "</td>";//create table categories
$table .= "</tr>";
foreach($corp as $value) //foreach corporation in corp
{
    $table .= "\t<tr>";
    $table .= "<td>" . $value['corp'] . "</td>";
    $table .= "<td>" . "<a href='read.php?id=" . $value['id'] . "'>" . "Read" . "</a>" . "</td>";
    $table .= "<td>" . "<a href='delete.php?id=" . $value['id'] . "'>" . "Delete" . "</a>" . "</td>"; //link to delete.php with id built in, so user can select to delete the row
	$table .= "<td>" . "<a href='update.php?id=" . $value['id'] . "'>" . "Update" . "</a>" . "</td>";


    $table .= "\t</tr>\n";
    }



$table .= "</tbody>";
$table .= "</table>";

echo $table;
?>

<form action='index.php' method='get'> 
	<input type='submit' name='action' value='Add'></input> 
</form>


