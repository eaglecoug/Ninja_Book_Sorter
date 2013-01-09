<?php
/* Program: display 2.php
 * Desc:    Displays Ninja Book titles
 */
?>
<html>
<head><title>Ninja Books</title></head>

<style>
td {width: 1px}
</style>
<body>
<?php
  $host = "icsbranchnet.ipagemysql.com";
  $user = "eaglecoug";
  $password = "10sne1";
  $dbname = "ninjabook";
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");
  $type = "ninja book";  
  $query = "SELECT bookTitle FROM booktitle WHERE type='ninja book' order by bookTitle";
  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");


  $type = ucfirst($type)."s";
  echo "<h1>$type</h1>";
  echo "<table>";
  echo "<tr><td></td>";
  while($row= mysqli_fetch_assoc($result))
  {
     extract($row);
       echo "<tr>
           <td>$bookTitle</td>";
     
  }
  echo "</table>";
?>
</body></html>