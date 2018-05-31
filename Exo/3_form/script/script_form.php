<?php

$name = $_POST['name'];
$password = $_POST['password'];
$country = $_POST['country'];
$doLoveCacao99 = 0;
if (isset($_POST['loveCacao99%'])) {
  $doLoveCacao99 = $_POST['loveCacao99%'];
}

 ?>

 <p>Hello <strong><?php echo $name; ?></strong>. I know your password is <strong><?php echo $password; ?> </strong>
      and your from <strong><?php echo $country; ?></strong> <?php if ($doLoveCacao99) { echo 'and you love the chocolate at 99%'; } ?></p>
