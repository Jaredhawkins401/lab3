<?php
$table = "<table>\n"; 
$table .= "<tbody>";
$table .= "<tr>" . "<td>" . "<b>" ."Corporation" . "</td>";//create tables categories
$table .= "<td>" . "<b>" ."Incorporated Date" . "</td>";
$table .= "<td>" . "<b>" ."Email" . "</td>";
$table .= "<td>" . "<b>" ."Zipcode" . "</td>";
$table .= "<td>" . "<b>" ."Owner" . "</td>";
$table .= "<td>" . "<b>" ."Phone" . "</td>";
$table .= "</tr>";
foreach($corp as $value)
{
    $table .= "\t<tr>";
    $table .= "<td>" . $value['corp'] . "</td>";//create table with info collected
    $table .= "<td>" . $value['incorp_dt'] . "</td>";
    $table .= "<td>" . $value['email'] . "</td>";
    $table .= "<td>" . $value['zipcode'] . "</td>";
    $table .= "<td>" . $value['owner'] . "</td>";
    $table .= "<td>" . $value['phone'] . "</td>";
    $table .= "<td>" . "<a href='delete.php?id=" . $value['id'] . "'>" . "Delete" . "</a>" . "</td>"; //link to delete.php with id built in, so user can select to delete the row
	$table .= "<td>" . "<a href='update.php?id=" . $value['id'] . "'>" . "Update" . "</a>" . "</td>";
    $table .= "\t</tr>\n";
    }



$table .= "</tbody>";
$table .= "</table>";

echo $table;
?>