<?php
ob_start();
/**
 * Template Name: Proc IT
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
      echo "<center>Nessun prodotto selezionato!";
  
  
    }

    /* daca sunt produse in oferta! */
    else{
        $produse = $_POST['oferta'];

        echo "<center><h4>Produse adaugate:</h4> <hr />";
        $productcart=array();
        if(isset($_COOKIE['produse_it'])){
          $obj = json_decode(stripslashes($_COOKIE['produse_it']));
          if($obj){
            foreach($obj as $item => $value){
              array_push($productcart,array(
        
                "cod" => $value->cod,
                "cantitate" => $value->cantitate,
                "nume" => $value->nume
        
        
            
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


    
    ));

    
  
  }
  header("Refresh:0; url=/wp/it/richiesta-di-offerta-2/");



// /* FACEM SESIUNEA CU PRODUSELE!! */
// if(isset($_COOKIE['produse_it']])){

// $decoded = json_decode($_COOKIE['produse_it']]);
// array_push($productcart, $decoded);

// }
$encoded=json_encode($productcart);

setcookie("produse_it", $encoded, time() + (86400 * 30), "/");

    }

}

?>


<?php get_footer("it"); ?>
