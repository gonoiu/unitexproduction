<?php
ob_start();
/**
 * Template Name: Detalii Produs
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header('page');
/* SCRIPT CERERE OFERTA
29.12
 */

// VARIABILA CU CARE LUCREZI ESTE LANG
$lang = "ro";


foreach (explode("/", $_SERVER['REQUEST_URI']) as $item) {

  // IT
  if ($item == 'it') {
    $lang = "it";
  }
  /** EN */
  if ($item == 'en') {
    $lang = "en";
  }

}


/**
 * Traducere
 */


 switch ($lang){

    case "it":
      $produse_adaugate = "Prodotti aggiunti";
      $cod = "Codice";
      $produs = "Prodotto";
      $cantitate = "Quantità";
      $sterge = "Cancella prodotto";
      $formular_c_o = "Modulo di richiesta offerta";
      $nume = "Nome";
      $prenume = "Nome";
      $firma = "Azienda";
      $telefon = "Telefono";
      $livrare = "Indirizzo di consegna";
      $email = "Indirizzo e-mail";
      $obligatoriu = "Tutti i campi sono obbligatori";
      $termeni = "Termini e condizioni";
      $produse_bifate = "Richiedi offerta - Prodotti selezionati";
      $add_nume = "Inserisci nome";
      $add_prenume = "Inserisci il nome";
      $pf = "Persona fisica";
      $add_telefon = "Inserisci telefono";
      $acord = "Sono d'accordo con";
      $atentie_obligatoriu = "ATTENZIONE! Tutti i campi sono obbligatori";
      $atentie_termeni = "ATTENTO! È necessario accettare i termini e le condizioni.";
      $e_nume = "Nome";
      $e_prenume = "I nome";
      $e_persoana_fizica = "Persona fisica / Azienda";
      $e_telefon = "Telefono";
      $e_livrare = "Indirizzo di consegna";
      $e_email = "Indirizzo e-mail";
      $optional = "Opzionale";
      break;
 
       case "en":
          $produse_adaugate = "Products added";
          $cod = "Code";
          $produs = "Product";
          $cantitate = "Quantity";
          $sterge = "Delete product";
          $formular_c_o = "Offer Request Form";
          $nume = "Firstname";
          $prenume = "Name";
          $firma = "Company";
          $telefon = "Phone";
          $livrare = "Delivery address";
          $email = "Email address";
          $obligatoriu = "All fields are required";
          $termeni = "Terms and conditions";
          $produse_bifate = "Request offer - Products checked";
          $add_nume = "Enter Name";
          $add_prenume = "Enter Firstname";
          $pf = "Physical person";
          $add_telefon = "Enter Phone";
          $acord = "I agree with";
          $atentie_obligatoriu = "ATTENTION! All fields are mandatory";
          $atentie_termeni = "CAREFUL! You must accept the terms and conditions.";
          $e_nume = "Name";
          $e_prenume = "Firstname";
          $e_persoana_fizica = "Natural Person / Company";
          $e_telefon = "Phone";
          $e_livrare = "Delivery address";
          $e_email = "Email address";
          $optional = "Optional";
          break;
 
        case "ro":
          $produse_adaugate = "Produse adaugate";
          $cod = "Cod";
          $produs = "Produs";
          $cantitate = "Cantitate";
          $sterge = "Sterge produs";
          $formular_c_o = "Formular Cerere oferta";
          $nume = "Nume";
          $prenume = "Prenume";
          $firma = "Persoana Fizica / Companie";
          $telefon = "Telefon";
          $livrare = "Adresa livrare";
          $email = "Adresa e-mail";
          $obligatoriu = "Toate campurile sunt obligatorii";
          $termeni = "Termeni si conditii";
          $produse_bifate = "Cere oferta - Produse bifate";
          $add_nume = "Introdu Nume";
          $add_prenume = "Introdu Prenume";
          $pf = "Persoana fizica";
          $add_telefon = "Introdu Telefon";
          $acord = "Sunt de acord cu";
          $atentie_obligatoriu = "ATENTIE! Toate campurile sunt obligatorii";
          $atentie_termeni = "ATENTIE! Trebuie sa acceptati termenii si conditiile.";
          $e_nume = "Nume";
          $e_prenume = "Prenume";
          $e_persoana_fizica = "Persoana Fizica / Companie";
          $e_telefon = "Telefon";
          $e_livrare = "Adresa Livrare";
          $e_email = "Adresa Email";

          $e_cerere = "A fost trimisa o cerere de oferta";
          $produse_bifate = "Produsele bifate";
          $cerere_oferta = "Cerere oferta";
          $cerere_email = "Cererea de oferta a fost trimisa la adresa de e-mail";
          $optional = "Optional";

          break;
 
 }


$i = 0;
if (isset($_COOKIE['produse_en'])) {

  $obj = json_decode(stripslashes($_COOKIE['produse_en']));
  if ($obj) {
    foreach ($obj as $item => $value) {
      $i++;
    
    }

  }

}

if($i == 0){
  echo "<center><h4>You have no products added to the basket!</h4></center>";
  get_footer("en");
  die();

}

?>


<div id="content" class="site-content ">
  <!---about--->
  <section class="about-section">
    <!--===============spacing==============-->
    <div class="pd_top_90"></div>
    <!--===============spacing==============-->
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 ">

          <?php


          ?>

          <?php

          if (!isset($_POST['csubmit2'])) {
            ?>
            <div class="row text-center pd_bottom_50">
              <h4><?php echo $produse_adaugate; ?></h4>
            </div>

            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped"
              cellspacing="0">
              <thead>
                <tr>
                  <th class="product-name"><?php echo $cod; ?></th>
                  <th class="product-name"><?php echo $produs; ?></th>
                  <th class="product-name text-center"><?php echo $cantitate; ?></th>
                  <th class="text-center"><?php echo $sterge; ?></th>
                </tr>
              </thead>
              <tbody>
                <tr class="woocommerce-cart-form__cart-item cart_item">
                  <?php
   
                  if (isset($_COOKIE['produse_en'])) {

                    $obj = json_decode(stripslashes($_COOKIE['produse_en']));
                    if ($obj) {
                      foreach ($obj as $item => $value) {
                        $i++;
                        $nume = explode(";", $value->nume)[1];
                        echo "<tr>";
                        echo "<td>{$value->cod}</td>";
                        echo "<td><a href=''>{$nume}</a></td>";
                        echo "<td class='text-center'>{$value->cantitate}</td>";
                        ?>
                        <td class="text-center"><a href='stergere-produs-en?id=<?php echo $value->cod; ?>'
                            title="<?php $sterge; ?>"> <i class="fa fa-times" aria-hidden="true"></i></a></td>

                        <?php
                        echo "</tr>";
                      }

                    }

                  }
                  
                  ?>


                </tr>
              </tbody>
            </table>


            <form class="woocommerce-cart-form" action="/wp/en/offer-request" method="post">
              <div class="row">
                <div class=" pd_bottom_50"></div>
                <div class="col-md-12 text-center">
                  <h4><?php echo $formular_c_o; ?></h4>
                </div>
                <div class=" pd_bottom_50"></div>
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><sup class="obligatoriu">*</sup> <?php echo $nume; ?></label>
                    <input type="text" class="form-control" name="cnume" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="<?php echo $add_nume; ?>">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1"><sup><b>*</b></sup> <?php echo $prenume; ?></label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume"
                      placeholder="<?php echo $add_prenume; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="firma"><sup><b>*</b></sup> <?php echo $firma; ?></label>
                    <input type="text" class="form-control" id="firma" name="cfirma" value='Persoana fizica'
                      placeholder="(<?php echo $optional; ?>)">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="telefon"><sup><b>*</b></sup> <?php echo $telefon; ?></label>
                    <input type="number" class="form-control" id="telefon" name="ctelefon"
                      placeholder="<?php echo $add_telefon; ?>">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="adresa"><sup><b>*</b></sup> <?php echo $livrare; ?></label>
                    <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="<?php echo $livrare; ?>">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="email"><sup><b>*</b></sup> <?php echo $email; ?></label>
                    <input type="email" class="form-control" id="email" name="cemail" placeholder="<?php echo $email; ?>">
                  </div>
                </div>
              </div>


              <div class="row d_bottom_20">
                <a href="javascript:void(0"><sup><b>*</b></sup> <?php echo $obligatoriu; ?>!</a>
              </div>

              <label for="terms">
                <input type="checkbox" id="terms" name="terms" value='terms-acceptate'>
                Sunt de acord cu <a href="/termeni-si-conditii"><b><?php echo $termeni; ?></b></a>
                <?php the_field('companie', 'options'); ?>
              </label>

              <div class="pd_bottom_50"></div>

              <input type="submit" name="csubmit2" class='btn btn-danger' value="<?php echo $produse_bifate; ?>" />

            </form>

          </div>
        </div>
      </div>
      <?php



          }


          /* DACA FORMULARUL 2 A FOST TRIMIS! */

          if (isset($_POST['csubmit2'])) {

            $produse = $_COOKIE["produse_en"];
            if (isset($_COOKIE["produse_en"])) {


              ?>



        </tr>
        </tbody>
        </table>



        <?php




        $required = array('cnume', 'cprenume', 'ctelefon', 'cadresa', 'cemail');


        $error = false;
        foreach ($required as $field) {
          if (empty($_POST[$field])) {
            $error = true;
          }
        }

        if ($_POST['terms'] !== 'terms-acceptate') {
          echo "
            <div class='pd_bottom_50'></div>
            <div class='quotes_box style_one text-center'>
                <div class='icon'>
                  <span class='icon-quote'></span>
                </div>
                <div class='content'>
                  <h6 >{$atentie_termeni}}</h6>
                </div>
            </div>
            <div class='pd_bottom_50'></div>

            ";
          $error = true;


        }


        if ($error) {
          echo "
              <div class='pd_bottom_50'></div>
              <div class='quotes_box style_one text-center'>
                  <div class='icon'>
                    <span class='icon-quote'></span>
                  </div>
                  <div class='content'>
                    <h6 >{$atentie_obligatoriu}</h6>
                  </div>
              </div>
              <div class='pd_bottom_50'></div>

    ";


    $numeclient = htmlspecialchars($_POST['cnume'], ENT_QUOTES, 'UTF-8');
    $prenumep = htmlspecialchars($_POST['cprenume'], ENT_QUOTES, 'UTF-8');
    $email = $_POST['cemail'];
    $telefon = htmlspecialchars($_POST['ctelefon'], ENT_QUOTES, 'UTF-8');
    $adresa = htmlspecialchars($_POST['cadresa'], ENT_QUOTES, 'UTF-8');
    $firma = htmlspecialchars($_POST['cfirma'], ENT_QUOTES, 'UTF-8');

          ?>


          <form class="woocommerce-cart-form" action="/wp/en/offer-request" method="post">
            <div class="row">
              <div class=" pd_bottom_50"></div>
              <div class="col-md-12 text-center">
                <h4><?php echo $formular_c_o; ?></h4>
              </div>
              <div class=" pd_bottom_50"></div>
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1"><?php echo $nume; ?></label>
                  <input type="text" class="form-control" name="cnume" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $numeclient;?>"
                    placeholder="<?php echo $add_nume; ?>">
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="exampleInputPassword1"><?php echo $prenume; ?></label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume" placeholder="<?php echo $add_prenume; ?>" value="<?php echo $prenumep;?>"> 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="firma"><?php echo $persoana_fizica; ?></label>
                  <input type="text" class="form-control" id="firma" name="cfirma" value='<?php echo $persoana_fizica; ?>' value="<?php echo $firma;?>"
                    placeholder="(<?php echo $firma; ?>)">
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="telefon"><?php echo $telefon; ?></label>
                  <input type="number" class="form-control" id="telefon" name="ctelefon" placeholder="<?php echo $telefon; ?>" value="<?php echo $telefon;?>"> 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="adresa"><?php echo $livrare; ?></label>
                  <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="<?php echo $livrare; ?>" value="<?php echo $adresa;?>" >
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="email"><?php echo $email; ?></label>
                  <input type="email" class="form-control" id="email" name="cemail" placeholder="<?php echo $email; ?>" value="<?php echo $email;?>">
                </div>
              </div>
            </div>

            <div class="pd_bottom_50"></div>

            <label for="terms" class="text-center">
              <input type="checkbox" id="terms" name="terms" value='terms-acceptate'>
              <strong><?php echo $acord_termeni; ?><a href="/termeni-si-conditii"><?php echo $termeni; ?></a>
                <?php the_field('companie', 'options'); ?>
              </strong>
            </label>

            <div class="pd_bottom_50"></div>

            <input type="submit" name="csubmit2" class='btn btn-danger' value='<?php echo $produse_bifate; ?>' />

          </form>

      </div>
      </div>
      </div>

      <?php

        } else {

          echo "<h4>Formularul a fost trimis!</h4>";
          

          /* Campurile au fost completate */
          $numeclient = htmlspecialchars($_POST['cnume'], ENT_QUOTES, 'UTF-8');
          $prenume = htmlspecialchars($_POST['cprenume'], ENT_QUOTES, 'UTF-8');
          $email = $_POST['cemail'];
          $telefon = htmlspecialchars($_POST['ctelefon'], ENT_QUOTES, 'UTF-8');
          $adresa = htmlspecialchars($_POST['cadresa'], ENT_QUOTES, 'UTF-8');
          $firma = htmlspecialchars($_POST['cfirma'], ENT_QUOTES, 'UTF-8');


          /* SE PROCESEAZA TRIMITERE E-MAIL*/

          $to = $email;
          $subject = "CERERE OFERTA ";
          $mproducts = "";
          if (isset($_COOKIE['produse_en'])) {
            $obj = json_decode(stripslashes($_COOKIE['produse_en']));
            if ($obj) {
              foreach ($obj as $item => $value) {

                $nume = explode(";", $value->nume)[1];
                if(!$value->cod){
                  $mproducts .= "<p>{$nume} | {$cod}: - | {$cantitate}: {$value->cantitate}</p>";
                } 
                else
                {
                  $mproducts .= "<p>{$nume} | {$cod}: {$value->cod} | {$cantitate}: {$value->cantitate}</p>";
                }
               
               
              }

            }

          }
         

          unset($_COOKIE['produse_en']);
          setcookie('produse_en', '', time() - 3600, '/');

          $message = "
              <html>
                <head>
                  <title>{$cerere_oferta}</title>
                </head>
                <body>
                  <p>{$e_cerere}</p>
                  <h4>{$produse_bifate}</h4>
                  {$mproducts}
                  <table>
                    <tr>
                      <th>{$e_nume}</th>
                      <th>{$e_prenume}</th>
                      <th>{$e_persoana_fizica}</th>
                      <th>{$e_telefon}</th>
                      <th>{$e_livrare}</th>
                      <th>{$e_email}</th>
                    </tr>
                    <tr>
                      <td>{$numeclient}</td>
                      <td>{$prenume}</td>
                      <td>{$firma}</td>
                      <td>{$telefon}</td>
                      <td>{$adresa}</td>
                      <td>{$email}</td>
                    </tr>
                  </table>
                </body>
              </html>
              ";
          // Empty value and old timestamp
    

          // Always set content-type when sending HTML email
    
          $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";


          wp_mail($to, $subject, $message, $headers);
          wp_mail("info@unitexproduction.com", $subject, $message, $headers);

          echo "
  <div class='pd_bottom_50'></div>
    <div class='quotes_box style_one text-center'>
        <div class='icon'>
          <span class='icon-quote'></span>
        </div>
        <div class='content'>
          <4>{$cerere_email}: <br/> {$to}!</h6>
        </div>
    </div>
    <div class='pd_bottom_50'></div>
    <script>
    $('#tcart' ).hide();
    </script>
  ";




        }
            }
          }

          ?>

<?php

if (!empty($_POST['oferta'])) {

  ?>
  <div class="pd_bottom_50"></div>
  <h4 class="text-center"><?php echo $formular_c_o; ?></h4>
  <div class="pd_bottom_50"></div>

  <form class="woocommerce-cart-form" action="/wp/en/offer-request" method="post">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="exampleInputEmail1"><?php $nume; ?></label>
          <input type="text" class="form-control" name="cnume" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="<?php echo $add_nume; ?>">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="exampleInputPassword1"><?php $prenume; ?></label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume" placeholder="<?php echo $add_prenume; ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="firma"><?php $persoana_fizica; ?></label>
          <input type="text" class="form-control" id="firma" name="cfirma" value='<?php echo $persoana_fizica; ?>'
            placeholder="(<?php echo $optional; ?>)">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="telefon"><?php $telefon; ?></label>
          <input type="number" class="form-control" id="telefon" name="ctelefon" placeholder="Telefon">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="adresa"><?php $livrare; ?></label>
          <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="Adresa livrare">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="email"><?php $email; ?></label>
          <input type="email" class="form-control" id="email" name="cemail" placeholder="Email">
        </div>
      </div>
    </div>

    <div class="pd_bottom_50"></div>

    <label for="terms" class="text-center">
      <input type="checkbox" id="terms" name="terms" value="terms-accept">
      <strong><?php $acord; ?> <a href="/termeni-si-conditii"><?php $termeni; ?></a>
        <?php the_field('companie', 'options'); ?>
      </strong>
    </label>

    <div class="pd_bottom_50"></div>

    <input type="submit" name="csubmit2" class='btn btn-danger' value='<?php $produse_bifate; ?>' />

  </form>

  </div>
  </div>
  </div>

<?php } ?>
<?php


switch ($lang) {

  case "en":
    get_footer("en");
    break;
  case "ro":
    get_footer();
    break;
  case "it":
    get_footer("it");
    break;


}


?>