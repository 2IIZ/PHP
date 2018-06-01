<?php

$html ='<header class="masthead mb-auto">
          <div  class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav id="menu" class="nav nav-masthead justify-content-center">
          <a class="nav-link ';

if ($page == 'index') { $html .= 'active '; }

$html .= '"active" href="index.php">Home</a>
          <a class="nav-link ';

if ($page == 'features') { $html .= "active "; }


$html .= '" href="features.php">Features</a>
          <a class="nav-link ';

if ($page == 'contact') { $html .= "active "; }

$html .= '" href="contact.php">Contact</a>
        </nav>
      </div>
    </header>';

echo $html;

 ?>
