<?php
$page_name = basename($_SERVER['SCRIPT_NAME'], ".php");
$navLinks = ["home", "about", "resume"];

function outputNav($navLinks, $page_name) {
  $output = "";
  foreach ($navLinks as $link ) {
    if($link == "home") {
      $href = "index";
    } else {
      $href = $link;
    }

    if($href == $page_name) {
      $theclass = "class='active'";
    } else {
      $theclass = '';
    }
    $output.= "<li><a href='{$href}.php' {$theclass}>". ucfirst($link) ."</a></li>";
  }
  echo $output;
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
    <title>SimpDesign | <?php if($page_name != "index") { echo ucfirst($page_name);} else {echo "Home";} ?></title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="http://make-lemonade.co/themes/selfy/img/logo@2x.png?fbclid=IwAR3yWq0MiAxVGtjVzVWuoHRc7q3_EM_aok8k5VOtc-VdmYStayoVem93tjw" width="150px" alt="">
      </div>
      <div class="main-nav">
      <nav>
        <ul>
          <?php
            outputNav($navLinks, $page_name);
           ?>
        </ul>
      </nav>
    </div>
  </div>
    </header>
  </body>
