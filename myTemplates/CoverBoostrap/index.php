<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php include 'include/head.php.inc'; ?>

  </head>
  <body>

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        


        <?php


        if ($menu = 'home') {
          echo "show home";
        } else if ($menu = 'features') {
          echo "show features";
        } else if ($menu = 'contact') {
          echo "show contact";
        }


        ?>
        <main role="main" class="inner cover">
          <h1 class="cover-heading">Cover your page.</h1>
          <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
          </p>
        </main>

        <footer class="mastfoot mt-auto">

        <div class="inner">
            <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>. Photo by Alex Holyoake on Unsplash.</p>

          </div></footer>
        </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script type="text/javascript" src="js/script.js"></script>


  </body>
</html>
