<?php

$html ='<header class="masthead mb-auto">
          <div class="inner">
          <h3 class="masthead-brand">Opsigeo</h3>
          <nav id="menu" class="nav nav-masthead justify-content-center">
          <a class="nav-link ';

if ($page == 'index') { $html .= 'active '; }

$html .= '" href="index.php">Accueil</a>
          <a class="nav-link ';

if ($page == 'connection') { $html .= "active "; }


$html .= '" href="connection.php">Connexion</a>
          <a class="nav-link ';

if ($page == 'contact') { $html .= "active "; }

$html .= '" href="contact.php">Contactez-nous</a>
      </nav>
    </div>
  </header>';

echo $html;

// TODO: <header class="masthead mb-auto">
  <div  class="inner">
    <h3 class="masthead-brand">Cover</h3>
    <nav id="menu" class="nav nav-masthead justify-content-center">
      <a class="nav-link active" href="">Home</a>
      <a class="nav-link" href="">Features</a>
      <a class="nav-link" href="#">Contact</a>
    </nav>
  </div>
</header>
 ?>
