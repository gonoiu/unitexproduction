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

$i = 0;
if (isset($_COOKIE['produse'])) {

  $obj = json_decode(stripslashes($_COOKIE['produse']));
  if ($obj) {
    foreach ($obj as $item => $value) {
      $i++;
    
    }

  }

}

if($i == 0){
  echo "
    <div class='pd_top_90 pd_bottom_90'>
      <center>
        <h4>Nu aveti produse adaugate in cos!</h4>
      </center>
    </div>
  ";
  get_footer();
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
              <h4>Produse adaugate</h4>
            </div>

            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table table-striped"
              cellspacing="0">
              <thead>
                <tr>
                  <th class="product-name">Cod</th>
                  <th class="product-name">Produs</th>
                  <th class="product-name text-center">Cantitate</th>
                  <th class="text-center">Tarif</th>
                  <th class="text-center">Total</th>
                  <th class="text-center">Sterge</th>
                </tr>
              </thead>
              <tbody>
                <tr class="woocommerce-cart-form__cart-item cart_item">
                  <?php
   
                  if (isset($_COOKIE['produse'])) {

                    $obj = json_decode(stripslashes($_COOKIE['produse']));
                    if ($obj) {
                      foreach ($obj as $item => $value) {
                        $i++;
                        $nume = explode(";", $value->nume)[1];
                        echo "<tr>";
                        echo "<td>{$value->cod}</td>";
                        echo "<td><a href=''>{$nume}</a></td>";
                        echo "<td class='text-center'>{$value->cantitate}</td>";
                        echo "<td class='text-center'>{$value->tarif}</td>";
                        echo "<td class='text-center'>{$value->total}</td>";

                        ?>
                        <td class="text-center"><a href='stergere-produs-cos?id=<?php echo $value->cod; ?>'
                            title="sterge produs"> <i class="fa fa-times" aria-hidden="true"></i></a></td>

                        <?php
                        echo "</tr>";
                      }

                    }

                  }
                  
                  ?>


                </tr>
              </tbody>
            </table>


            <form class="woocommerce-cart-form" action="/cerere-oferta" method="post">
              <div class="row">
                <div class=" pd_bottom_50"></div>
                <div class="col-md-12 text-center">
                  <h4>Formular Cerere oferta</h4>
                </div>
                <div class=" pd_bottom_50"></div>
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1"><sup class="obligatoriu">*</sup> Nume</label>
                    <input type="text" class="form-control" name="cnume" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="Introduceti numele dvs.">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1"><sup><b>*</b></sup> Prenume</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume"
                      placeholder="Prenume">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="firma"><sup><b>*</b></sup> Firma</label>
                    <input type="text" class="form-control" id="firma" name="cfirma" value='Persoana fizica'
                      placeholder="(Optional)">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="telefon"><sup><b>*</b></sup> Telefon</label>
                    <input type="number" class="form-control" id="telefon" name="ctelefon"
                      placeholder="Numarul de telefon">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="adresa"><sup><b>*</b></sup> Adresa livrare</label>
                    <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="Adresa livrare">
                  </div>
                </div>

                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <label for="email"><sup><b>*</b></sup> Adresa e-mail</label>
                    <input type="email" class="form-control" id="email" name="cemail" placeholder="Email">
                  </div>
                </div>
              </div>


              <div class="row d_bottom_20">
                <a href="javascript:void(0"><sup><b>*</b></sup> Toate campurile sunt obligatorii!</a>
              </div>

              <label for="terms">
                <input type="checkbox" id="terms" name="terms" value='terms-acceptate'>
                Sunt de acord cu <a href="/termeni-si-conditii"><b>Termeni si conditii</b></a> a
                <?php the_field('companie', 'options'); ?>
              </label>

              <div class="pd_bottom_50"></div>

              <input type="submit" name="csubmit2" class='btn btn-danger' value='Cere oferta - Produse bifate' />

            </form>

          </div>
        </div>
      </div>
      <?php



          }


          /* DACA FORMULARUL 2 A FOST TRIMIS! */

          if (isset($_POST['csubmit2'])) {

            $produse = $_COOKIE["produse"];
            if (isset($_COOKIE["produse"])) {


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
                  <h6 >ATENTIE! Trebuie sa acceptati <a href='/termeni-si-conditii'>termenii si conditiile.</a></h6>
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
          <h6 >ATENTIE! Toate campurile sunt obligatorii!</h6>
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


          <form class="woocommerce-cart-form" action="/cerere-oferta" method="post">
            <div class="row">
              <div class=" pd_bottom_50"></div>
              <div class="col-md-12 text-center">
                <h4>Formular Cerere oferta</h4>
              </div>
              <div class=" pd_bottom_50"></div>
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nume</label>
                  <input type="text" class="form-control" name="cnume" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $numeclient;?>"
                    placeholder="Introduceti numele dvs.">
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Prenume</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume" placeholder="Prenume" value='<?php echo $prenumep;?>'>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="firma">Firma</label>
                  <input type="text" class="form-control" id="firma" name="cfirma" value='Persoana fizica' value='<?php echo $firma; ?> '
                    placeholder="(Optional)">
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="telefon">Telefon</label>
                  <input type="number" class="form-control" id="telefon" name="ctelefon" placeholder="Numarul de telefon" placeholder="<?php echo $telefon; ?>"  value="<?php echo $telefon; ?>" ></input>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="adresa">Adresa livrare</label>
                  <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="Adresa livrare" value='<?php echo $adresa; ?> '>
                </div>
              </div>

              <div class="col-lg-6 col-md-12">
                <div class="form-group">
                  <label for="email">Adresa e-mail</label>
                  <input type="email" class="form-control" id="email" name="cemail" placeholder="Email" value='<?php echo $email; ?> '>
                </div>
              </div>
            </div>

            <div class="pd_bottom_50"></div>

            <label for="terms" class="text-center">
              <input type="checkbox" id="terms" name="terms" value='terms-acceptate'>
              <strong>Sunt de acord cu <a href="/termeni-si-conditii">Termeni si conditii</a> a
                <?php the_field('companie', 'options'); ?>
              </strong>
            </label>

            <div class="pd_bottom_50"></div>

            <input type="submit" name="csubmit2" class='btn btn-danger' value='Cere oferta - Produse bifate' />

          </form>

      </div>
      </div>
      </div>

      <?php

        } else {

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
          if (isset($_COOKIE['produse'])) {
            $obj = json_decode(stripslashes($_COOKIE['produse']));
            if ($obj) {
              foreach ($obj as $item => $value) {

                $nume = explode(";", $value->nume)[1];
                if(!$value->cod){
                  $mproducts .= "<p>{$nume} | COD: - | CANTITATE: {$value->cantitate}</p>";
                } 
                else
                {
                  $mproducts .= "<p>{$nume} | COD: {$value->cod} | CANTITATE: {$value->cantitate}</p>";
                }
               
              }

            }

          }


          unset($_COOKIE['produse']);
          setcookie('produse', '', time() - 3600, '/');

          $message = "
  <html>
    <head>
      <title>Cerere oferta</title>
    </head>
    <body>
      <p>A fost trimisa o cerere de oferta!</p>
      <h4>Produsele bifate</h4>
      {$mproducts}
      <table>
        <tr>
          <th>Nume</th>
          <th>Prenume</th>
          <th>Firma</th>
          <th>Telefon</th>
          <th>Adresa livrare</th>
          <th>E-mail</th>
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
                        <h6 >Cererea de oferta a fost trimisa la adresa de e-mail: <br/> {$to}!</h6>
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
  <h4 class="text-center">Formular cerere oferta</h4>
  <div class="pd_bottom_50"></div>

  <form class="woocommerce-cart-form" action="/cerere-oferta" method="post">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="exampleInputEmail1">Nume</label>
          <input type="text" class="form-control" name="cnume" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Introduceti numele dvs.">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="exampleInputPassword1">Prenume</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="cprenume" placeholder="Prenume">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="firma">Firma / Persoana Fizica</label>
          <input type="text" class="form-control" id="firma" name="cfirma" value='Persoana fizica'
            placeholder="(Optional)">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="telefon">Telefon</label>
          <input type="number" class="form-control" id="telefon" name="ctelefon" placeholder="Numarul de telefon">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="adresa">Adresa livrare</label>
          <input type="text" class="form-control" id="adresa" name="cadresa" placeholder="Adresa livrare">
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="form-group">
          <label for="email">Adresa e-mail</label>
          <input type="email" class="form-control" id="email" name="cemail" placeholder="Email">
        </div>
      </div>
    </div>

    <div class="pd_bottom_50"></div>

    <label for="terms" class="text-center">
      <input type="checkbox" id="terms" name="terms" value="terms-accept">
      <strong>Sunt de acord cu <a href="/termeni-si-conditii">Termeni si conditii</a> a
        <?php the_field('companie', 'options'); ?>
      </strong>
    </label>

    <div class="pd_bottom_50"></div>

    <input type="submit" name="csubmit2" class='btn btn-danger' value='Cere oferta - Produse bifate' />

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