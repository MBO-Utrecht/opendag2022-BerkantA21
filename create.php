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
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./info.html">Onze Opleidingen</a>
                </li>

                <ul class="navbar-nav">
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

    <br></br>

<main class="container">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2 class="display-4">Dit is onze Enquete pagina</h2>
                     <p class="lead">Hieronder kunt u een nieuwe enquete  toevoegen!</p>
                </div>
            </div>
        </div>
    </div>

    
    
    <form action="./create_script.php" method="post">
    <h4>U kunt kiezen uit: Onvoldoende - Voldoende - Goed</h4>
    <div class="row">
    <div class="col-6 m-">
        <div class="form-group">
            <tr>
            <label for="naam"><strong>Naam:  </strong></label>
            <input type="text" class="form-control" name="naam" placeholder="Voer uw naam in" id="naam">
            </tr>
        <div class="row">
        </div>
    <br>
        <div class="form-group">
        <tr>
            <td><label for="info"><strong>Voldoet de open dag en de informatie die je 
                hebt ontvangen aan jouw verwachting?: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="info" id="info1"><label for="info1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="info" id="info2"><label for="info2">Voldoende</label></td>
            <td><input type="radio" value="G" name="info" id="info3"><label for="info3">Goed</label></td>
            </div>
        </tr>
        </div>
        <tr>
            <td><label><strong>
                Wat vond je van vakinhoudelijke voorlichting?
            </strong></label></td>
        </tr>
        <div class="form-group">
        <tr>
            <td><label for="medewerker"><strong>Medewerker ICT: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="medewerker" id="medewerker1"><label for="medewerker1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="medewerker" id="medewerker2"><label for="medewerker2">Voldoende</label></td>
            <td><input type="radio" value="G" name="medewerker" id="medewerker3"><label for="medewerker3">Goed</label></td>
            </div>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td><label for="software"><strong>Software Developer: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="software" id="software1"><label for="software1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="software" id="software2"><label for="software2">Voldoende</label></td>
            <td><input type="radio" value="G" name="software" id="software3"><label for="software3">Goed</label></td>
            </div>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td><label for="allround"><strong>Allround medewerker: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="allround" id="allround1"><label for="allround1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="allround" id="allround2"><label for="allround2">Voldoende</label></td>
            <td><input type="radio" value="G" name="allround" id="allround3"><label for="allround3">Goed</label></td>
            </div>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td><label for="gesprek"><strong>Wat vond je van gesprek met studenten: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="gesprek" id="gesprek1"><label for="gesprek1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="gesprek" id="gesprek2"><label for="gesprek2">Voldoende</label></td>
            <td><input type="radio" value="G" name="gesprek" id="gesprek3"><label for="gesprek3">Goed</label></td>
            </div>
        </tr>
        </div>
        <div class="form-group">
        <tr>
            <td><label for="ervaring"><strong>Heb je de schoolsfeer als positief ervaren?: </strong></label></td>
            <div class="col">
            <td><input type="radio" value="O" name="ervaring" id="ervaring1"><label for="ervaring1">Onvoldoende</label></td>
            <td><input type="radio" value="V" name="ervaring" id="ervaring2"><label for="ervaring2">Voldoende</label></td>
            <td><input type="radio" value="G" name="ervaring" id="ervaring3"><label for="ervaring3">Goed</label></td>
            </div>
        </tr>
        </div>
       <div class="form-group">
        <tr>
            <td><label for="tips"><strong>
                Heb je voor ons nog tips of zijn er vragen waar je geen antwoord op hebt gekregen?:
            </strong></label></td>
            <div class="col">
            <td><input type="textarea" class="form-control" name="tips" id="tips" placeholder="Invoer Comment" aria-describedby="CommentHelp"></td>
            </div>
        </tr>
       </div>
        <tr>
            <td><label for="submit"></label></td>
            <td><input type="submit" name="submit" id="submit"></td>
        </tr>
        
    </form>

    </div>
    </div>
    </div>
</main>

    <br></br>

    <div class="footerr">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item" id="left-footer">
                        <h3>Snel naar</h3>
                        <ul>
                            <li><a href="index.html">Homepage</a></li>
                            <li><a href="create.php">Enquete</a></li>
                            <li><a href="enquete_lezen.php">Enquete-lezen</a></li>
                            <li><a href="info.html">Meer info Opleidingen</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Over Ons</h3>
                        <p>Reparatie Ict School is een kleinschalige, interconfessionele onderwijsinstelling die
                           doelmatig onderwijs aanbiedt met focus op de hoogste niveaus van het mbo.
                           We bieden met ca. 500 medewerkers ruim 50 mbo-opleidingen aan ongeveer 5.000 studenten, 
                           in uiteenlopende de domeinen van het mbo-onderwijs.
                        </p>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Reparatie-ict-school</h3>
                        <p>Reparatie ict school wil jou helpen in de ontwikkeling van student tot zelfbewuste professional. 
                          Wij geven jou meer dan een opleiding en leren je meer dan een vak. Er is veel aandacht voor de ontwikkeling van talent, 
                          arbeidsvaardigheden, ondernemend gedrag, maatschappelijke betrokkenheid, respect voor elkaar en burgerschap. 
                        </p>
                    </div>
                    <div class="col item social">
                        <a href="https://www.facebook.com/"><i class="icon ion-social-facebook" id="facebooks"></i></a>
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