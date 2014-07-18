<?php
/*
 
Nav demo starter code
 
Take this starter code, and save it as navdemo.php 
We'll use some PHP to make it work for your site!
 
*/
 
$pages = array();
  


//Define pages as a 2d array
//Slug => page name

//slug must be lower case, no spaces or punctuation

$pages['trailer'] = "Awesome Trailer";

$pages['about'] = "All About Wolf";

$pages['tickets'] = "Buy Tickets";

$pages['location'] = "Wolf Is Here";

$pages['credits'] = "Cast and Crew";

$pages['register'] = "Become Wolf";




//var_dump($pages);

function createNavFromArray($pages){
  
  //start creating a string of html for Nav
  $nav = "<nav><ul>";

  
  //create the LIs
  foreach($pages as $slug => $pageName)
  {
    $class = "inactive";

    if($_GET['page'] == $slug)
    {
      $class = "active";
    }

    $nav .= "<li class='".$class."'><a href=\"index.php?page=".$slug."\">".$pageName. "</a></li>";
  
  }


  //finish creating html string for Nav

  $nav .= "</ul></nav>";


  return $nav;
}

      $nav = createNavFromArray($pages);
      echo $nav;
      ?>
