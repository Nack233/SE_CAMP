<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ตารางสูตรคูณแม่</title>
</head>
<style>
   php{
    overflow: auto;
   }
</style>
<body>
    <h1>ตารางสูตรคูณแม่</h1>

    <table>
<?php
$i = 1;
$j = 2;
while ($i <= 24) {
  echo "<tr>";
  echo "<td>$j x $i = " . $i * $j . "</td>";
  echo "</tr>";
  $i++;
}
?>

    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
            overflow: visible;
        }
    </style>
</body>
</html>