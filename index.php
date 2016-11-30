<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">

    <?php

    for ($i=1; $i <= 5; $i++) { ?>
      <div class="row">
        <div class="col-md-12">
          <section style="margin: 30px auto;" id="<?php echo $i ?>">
            <h2 class="text-center"> COMBAT <?php echo $i; ?> </h2>
            <?php include('index'.$i.'.php'); ?>
          </section>
        </div>
      </div>
      <?php
    } ?>

  </div>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
