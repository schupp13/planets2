<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Planets</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">

    <!-- Scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main (custom) style sheet  -->
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="container-fluid app">
        <div class="row order">
          <div class="col-sm-3 d-flex col1">
            <ul class="d-flex flex-column justify-content-around nav-list">
              <li class="mercury-li"><a  href="#">Mercury</a></li>
              <li class="venus-li"><a  href="#">Venus</a></li>
              <li class="earth-li"><a  href="#">Earth</a></li>
              <li class="mars-li"><a  href="#">Mars</a></li>
              <li class="jupiter-li"><a  href="#">Jupiter</a></li>
              <li class="saturn-li"><a  href="#">Saturn</a></li>
              <li class="uranus-li"><a  href="#">Uranus</a></li>
              <li class="neptune-li"><a  href="#">Neptune</a></li>
            </ul>
          </div>
        <div class="col-sm-9 d-flex flex-column justify-content-start align-content-start col2">
          <h1 class="header">Our Solar System</h1>
          <div class="planets">

                 <?php include 'planets.php'; ?>
          </div>
        </div>
        </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
  </body>
</html>
