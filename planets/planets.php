    <?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "planets";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `planet-ifno` ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="planet-div <?=strtolower($row['name'])?>-div" style="display:none; width:70%; margin:0 auto;">
      <div class="jumbotron" style="background-color:black; color:white;">
        <div class=""><h1><?=$row['name']?></h1>
        <p><?=$row['description'] ?></p></div>
      </div>

     <table class="table table-dark table-responsive planet-table">
       <tr>
         <th>Planet</th>
         <th>Distance</th>
         <th>Radius</th>
         <th>Mass</th>
         <th>Day</th>
         <th>Orbital</th>
         <th>Link</th>
       </tr>
      <tr>
      <td><?=$row['name']?></td>
      <td><?=$row['distance']?></td>
      <td><?=$row['radius']?></td>
      <td><?=$row['mass']?></td>
      <td><?=$row['day']?></td>
      <td><?=$row['orbital']?></td>
      <td><a href="<?=$row['link']?>" class="btn btn-info" target="_blank">More Info</a></td>
    </table>
    </div>
    <?
  }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
