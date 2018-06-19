<?php
# @Date:   2018-06-02T15:46:51+02:00
# @Last modified time: 2018-06-14T08:59:00+02:00


if ($page == 'index') { $index = 'active '; }
if ($page == 'features') { $features = "active "; }
if ($page == 'contact') { $contact .= "active "; }


?>


<header class="masthead mb-auto">
  <div  class="inner">
    <h3 class="masthead-brand">Cover</h3>
    <nav id="menu" class="nav nav-masthead justify-content-center">
      <a class="nav-link <?= $index ?>"  href="index.php">Home</a>
      <a class="nav-link <?= $features ?>" href="features.php">Features</a>
      <a class="nav-link <?= $contact ?>" href="contact.php">Contact</a>
    </nav>
  </div>
</header>
