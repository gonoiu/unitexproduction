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
defined( 'ABSPATH' ) || exit;
get_header('page');



if(isset($_POST['csubmit'])){
 
    if(empty($_POST['oferta'])){
      echo "<center>Nu a fost selectat nici un produs!";
  
  
    }

    /* daca sunt produse in oferta! */
    else{
        $produse = $_POST['oferta'];

        echo "<center><h4>Produse adaugate:</h4> <hr />";
        $productcart=array();
        if(isset($_COOKIE['produse'])){
          $obj = json_decode(stripslashes($_COOKIE['produse']));
          if($obj){
            foreach($obj as $item => $value){
              array_push($productcart,array(
        
                "cod" => $value->cod,
                "cantitate" => $value->cantitate,
                "nume" => $value->nume,
                "pret" => $value->pret,
                "total" => $value->total
        
        
            
            ));
            }
            }



        }
  foreach($produse as $item){
      echo "<p>{$item}</p> - Cantitate: ";
      $cod=trim(explode(";",$item)[0]);  
      
    $postc ="cantitate-{$cod}";

      echo $_POST[$postc];
 
   $proc = stripslashes("{$item} - Cantitate: ". $_POST[$postc]);

     array_push($productcart,array(
        
        "cod" => $cod,
        "cantitate" => $_POST[$postc],
        "nume" => $item

//aici nu stiu ce sa adaug !!! ATENTIE
    
    ));

    
  
  }
  header("Refresh:0; url=cerere-oferta");



// /* FACEM SESIUNEA CU PRODUSELE!! */
// if(isset($_COOKIE['produse'])){

// $decoded = json_decode($_COOKIE['produse']);
// array_push($productcart, $decoded);

// }
$encoded=json_encode($productcart);

setcookie("produse", $encoded, time() + (86400 * 30), "/");

    }

}

?>


<?php get_footer(); ?>
