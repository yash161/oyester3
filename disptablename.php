<?php
include "db.php";
include "index.html";
if(isset($_GET['submit']))
{
    $keyword = $_GET['keyword'];
    $url_components = parse_url($keyword);
   parse_str($url_components['query'], $params);
    $key=$params['source'];
    echo $key;
   //  echo $keyword;
   //  $sql = "select table1 from keyword_table where keyword='$keyword'";
      if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      
      $result = mysqli_query($con,"select table1 from keyword_table where keyword='$key'");
      
      echo "<table border='1'>
      <tr>
      <th>Firstname</th>

      </tr>";
      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['table1'] . "</td>";
      // echo "<td>" . $row['LastName'] . "</td>";
      echo "</tr>";
      $tablename=$row['table1'];
      echo $tablename;
      }
      echo "</table>";
}
?>