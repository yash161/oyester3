<?php
session_start();
?>
<?php
$conn = new mysqli("localhost","root","","oyester");
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $keyword = $_POST['keyword'];
    $res = parse_url($keyword);
    parse_str($res['query'], $params);
    $name = $params['name'];
    $sql = "select table1 from keyword_table where keyword=$name";
    if ($result = $mysqli->query($query)) 
    {

      /* fetch associative array */
      while ($row = $result->fetch_assoc()) {
          $field1name = $row["col1"];
      }

      $result->free();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
  </head>
  <body>
    <form  method="get">
        <label for="keyword">keyword</label>
        <input type="text"  placeholder="keyword " id="keyword " name="keyword"><br>
        <input type="submit" value="Register"  name="submit">
    </form>
  </body>
</html>