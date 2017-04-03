<?php 
include "baza/crud.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Planinarski klub</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        include "baza/insert.php";
        include "baza/konekcija.php";
        include "baza/delete.php";
        ?>

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Planinarski klub</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">O nama</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#registracija">Registracija</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Članovi</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner">
                    <h1>Planinarski klub Srbije</h1>
                    <hr>
                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Saznaj više</a>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">O klubu</h2>
                        <hr class="light">
                        <p class="text-faded">Planinarski klub Srbije je najbrojniji planinarski klub u Srbiji sa preko 2000 članova i najvećim brojem akcija, izleta i pohoda. Osnovne aktivnosti kluba su: izleti, planinarenje, sportska orijentacija, alpinizam, i nadasve druženje sa ljudima raznih profesija, nacionalnosti, koje sve povezuje humanost i ljubav prema prirodi.</p>
                        <a href="#" class="btn btn-default btn-xl">Vrati nazad</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="registracija">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Registracija</h2>
                        <hr class="primary">
                    </div>
                </div>
            </div class="ajax-content">
            <div class="container">
                <div class="row">
                    <div>
                        <form method= "post" action="baza/insert.php" role="form" class="container">
                          <div class="row"> 

                            <div class="col-md-4">  

                              <div class="licnipodaci" role="form">
                                <h2>Lični podaci</h2>
                                <hr>  
                                <div class="form-group "> 
                                  <input type="text" class="form-control" name="ime" placeholder="Ime">    
                              </div>

                              <div class="form-group "> 
                                  <input type="text" class="form-control" name="prezime" placeholder="Prezime">    
                              </div>

                              <div class="form-group "> 
                                  <label for="pol">Pol</label> <br / >
                                  <input type="radio" name="pol" name="blankRadio" value="muski"> Muški <br / >
                                  <input type="radio" name="pol" name="blankRadio" value="zenski"> Ženski <br / >  

                              </div>

                              <div class="form-group "> 
                                  <input type="text" class="form-control" name="telefon" placeholder="Broj telefona">   
                              </div>  


                              <div class="form-group "> 
                                 <label for="datumRodjenja">Datum rodjenja</label> <br / >
                                 <input type="date" class="form-control" name="datumRodjenja" placeholder="Datum rođenja (dd/mm/yyyy)">    
                             </div>

                             <div class="form-group "> 
                              <input type="email" class="form-control" name="email" placeholder="Email">    
                          </div>

                          

                      </div>
                  </div>

                  <div class="col-md-4">  
                      <div class="udruzenje_detalji" role="form"> 
                        <h2>Ostalo</h2>
                        <hr>

                        <div class="form-group "> 
                          <label for="pripada">Da li ste vec clan nekog planinarskog drustva?</label> <br / >
                          <input type="radio" name="pripada" name="blankRadio" value="da"> Da <br />
                          <input type="radio" name="pripada" name="blankRadio" value="ne"> Ne <br /> 
                      </div>

                      <div class="form-group "> 
                        <label for="pdrustvo">Kog planinaskog drušva?</label> <br / >
                        <input type="text" class="form-control" name="pdrustvo" placeholder="Planinasko drustvo">   
                    </div>

                    <div class="form-group "> 
                        <label for="oprema">Oprema koju posedujete</label> <br / >
                        <input type="text" class="form-control" name="oprema" placeholder="Oprema">   
                    </div>

                    <div class="form-group "> 
                        <label for="planine">Koja planina u Srbiji je po Vašem mišljenju najpogodinija za rekreativno planinarstvo?</label> <br / >
                        <input type="text" class="form-control" name="planine" placeholder="Planina">   
                    </div>

                </div>
            </div>



        </div>
        <div class="row"> 
            <div class="col-md-4 col-md-offset-4">
              <button type="submit" method="post" class="btn btn-primary btn-block">POŠALJI</button>
          </div>
      </div>


  </form>
</div>
</div>
</div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter">
           
         <div class="ajax-content">
            <?php 
            $crud = new crud();
            $sql="SELECT id,ime,prezime,telefon,email,pdrustvo,oprema,planine FROM members ";
            
            $results =  $crud->uzmiPlaninare($sql);
            
            ?>

            <div class="container select-table">

                <table class="table table-hover table-striped" style="margin-top:15px;">
                    <thead>
                        <tr>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th width="215px">E-mail</th>
                            <th width="165px">Telefon</th>
                            <th width="135px">Planinarsko drustvo</th>
                            <th width="135px">Oprema</th>
                            <th width="135px">Planine</th>
                            <th width="160px">Izmeni/ Obriši</th>
                        </tr>
                    </thead>
                    <?php 
                    while ($row = $results->fetch_object()) {
                        ?>
                        <tbody>
                            <tr id="<?php echo $row->id ?>" class="edit_tr">
                                <td class="edit_td">
                                    <span id="ime_<?php echo $row->id ?>" class="text"><?php echo $row->ime ?></span>
                                    <!--<input type="text" value="<?php echo $row->ime ?>" class="editbox" id="ime_input_<?php echo $row->id ?>"> -->
                                </td>
                                <td class="edit_td">
                                    <span id="prezime_<?php echo $row->id ?>" class="text"><?php echo $row->prezime ?></span>
                                    <!--<input type="text" value="<?php echo $row->prezime ?>" class="editbox" id="prezime_input_<?php echo $row->id ?>"> -->
                                </td>

                                <td class="edit_td">
                                    <span id="email_<?php echo $row->id ?>" class="text"><?php echo $row->email ?></span>
                                </td>
                                <td class="edit_td">
                                    <span id="telefon_<?php echo $row->id ?>" class="text"><?php echo $row->telefon ?></span>
                                </td>
                                <td class="edit_td">
                                    <span id="pdrustvo_<?php echo $row->id ?>" class="text"><?php echo $row->pdrustvo ?></span>
                                </td>
                                <td class="edit_td">
                                    <span id="oprema_<?php echo $row->id ?>" class="text"><?php echo $row->oprema ?></span>
                                </td>
                                <td class="edit_td">
                                    <span id="planine_<?php echo $row->id ?>" class="text"><?php echo $row->planine ?></span>
                                </td>
                                <td>
                                    <a href="baza/delete.php?action=update&id=<?php echo $row->id ?>" class="btn btn-success btn-success-<?php echo $row->id ?>" style="display:none; width:72px;">Ažuriraj</a>
                                    <a href="" class="btn btn-info btn-info-<?php echo $row->id ?>" style=" width:72px;">Izmeni</a> 
                                    <a href="baza/delete.php?action=delete&id=<?php echo $row->id ?>" class="btn btn-danger" >Obriši</a>
                                </td>

                            </tr>
                        </tbody>
                        <?php } ?>

                    </table>
                </div>
                
                
            </div> 
        </div>
    </div>
</section>

    <!-- <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside> -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Ostanimo u kontaktu!</h2>
                    <hr class="primary">
                    <p>Kancelarija Planinarskog kluba Srbije
                        Andrićev venac 2/1, 11103 Beograd 4</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x wow bounceIn"></i>
                        <p>011-3343-137</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                        <p><a href="mailto:your-email@your-domain.com">office@pss.rs</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>
        <script src="js/delete.js"></script>
        <script src="js/update.js"></script>
        <script src="js/ajax_nav.js"></script>

    </body>

    </html>
