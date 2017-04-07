<!-- PHP functions -->
  <!-- Dictionary Terms Tag -->
  <?php
  function termTag($termId, $termName) {
      $infoIcon = "<sup><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></sup>";
      echo '<span class="call-out-text"><a href="#" data-toggle="modal" data-target="#' . $termId . '">';
      echo $termName;
      echo $infoIcon;
      echo '</a></span>';
  } ?>

  <!-- WDTCS Tag -->
  <?php
  function constitutionTag($constitutionId) {
    //currently Info icon. Would prefer a custom icon for constitution
    $constIcon = "<span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span>";
    echo $constIcon;
    echo '<span class="call-out-text"><a href="#" data-toggle="modal" data-target="#' . $constituionId . '">';
    echo 'What does the Constitution say?';
    echo '</a></span>';
  } ?>
<!-- end PHP functions -->

<html>
  <head>
    <title><?php echo("Civics 101") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </head>

  <body>
    <h1>this change!!</h1>
    <?php include("inc/header.php"); ?>
    <?php include("inc/section_intro.php"); ?>
    <?php include("inc/section_description.php"); ?>
    <?php include("inc/section_requirements.php"); ?>
    <?php include("inc/section_application.php"); ?>
    <?php include("inc/section_termination.php"); ?>

    <?php include("inc/footer.php"); ?>
  </body>

</html>
