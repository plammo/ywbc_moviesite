<?php
/*
 
Nav demo starter code
 
Take this starter code, and save it as navdemo.php 
We'll use some PHP to make it work for your site!
 
*/
 
$pages = array(
  'Awesome Trailer',
  'All About Wolf',
  'Buy Tickets',
  'Wolf is Here',
  'Cast and Crew',
  'Become Wolf',
  );

//var_dump($pages);

function createNavFromArray($pages){
  
  //start creating a string of html for Nav
  $nav = "<nav><ul>";

  //create the LIs
  foreach($pages as $slug => $pageName){
    $nav .= "<li><a href=\"index.php?page=".$slug."\">".$pageName. "</li>";
  }


  //finish creating html string for Nav

  $nav .= "</ul></nav>";


  return $nav;
}

      $nav = createNavFromArray($pages);
      echo $nav;
      ?>
