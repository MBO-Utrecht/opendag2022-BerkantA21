<?php

require('./classes/database.php');


$db = new Database();

$db->query("SELECT id, info, medewerker, software, allround, gesprek, ervaring, tips FROM enquetereparatie ORDER BY id DESC");

$enquetereparatie = $db->selectAll();

$tbody = "";
foreach($enquetereparatie as $key => $value)
{
    $tbody .= "<tr>
                    <td>" . $value->info . "</td>
                    <td>" . $value->medewerker . "</td>
                    <td>" . $value->software . "</td>
                    <td>" . $value->allround . "</td>
                    <td>" . $value->gesprek . "</td>
                    <td>" . $value->ervaring . "</td>
                    <td>" . $value->tips . "</td>
              </tr>";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 pl-0 w-100 sticky-top">
        <a class="navbar-brand" href="#"></a>
        <img src="./img/HomeImg.png" width="35" height="35" alt="" loading="lazy">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./info.html">Info Opendag</a>
                </li>

                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="./create.php">Enquete</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./enquete_lezen.php">Enquete lezen</a>
                </li>
                  </ul>
              </div>
          </nav>
        </header>


<h1>Dit zijn onze reviews!</h1>
<a href="./create.php">review aanmaken</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">info</th>
      <th scope="col">medewerker</th>
      <th scope="col">software</th>
      <th scope="col">allround</th>
      <th scope="col">gesprek</th>
      <th scope="col">ervaring</th>
      <th scope="col">tips</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>


    <div class="footerr">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item" id="left-footer">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Homepage</a></li>
                            <li><a href="#">Enquete</a></li>
                            <li><a href="#">Enquete-lezen</a></li>
                            <li><a href="#">Meer info Opendag</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Over Ons</h3>
                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,
                            Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet
                        </p>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Reparatie-ict-school</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. 
                            Vivamus ac sem lacus. 
                            Ut vehicula rhoncus elementum. 
                            Etiam quis tristique lectus. 
                            Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social">
                        <a href="https://www.facebook.com/"><i class="icon ion-social-facebook" img src="./img/Facebook_logo.png"></i></a>
                        <a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <p class="copyright">Reparatie-ict-school © 2022</p>
            </div>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>