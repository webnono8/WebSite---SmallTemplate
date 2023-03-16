<!----------index.php for FullTemplate---------->

<!-----Base HTML----->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil - Template</title>
  <link rel="shortcut icon" href="Votre logo"></link>
</head>
<body>

    <!---Header--->
    <?php include_once("Includes/header.php");?>

    <!---Variables--->
    <?php include_once("Includes/variables.php");?>

    <!---Article du jour--->

    <article class="articleHOME">
      <img ></img>
      <h2 style="color: grey;">TIPS</h2>
      <p href="Article/article1.php"><a href="Article/article1.php">Votre Article 1</a></p>
      <h2 style="color: grey;">RESOURCES</h2>
      <p href="Article/article2.php"><a href="Article/article2.php">Votre Article 2</a></p>
      <h2 style="color: grey;">GUIDES</h2>
      <p href="Article/article3.php"><a href="Article/article3.php">Votre Article 3</a></p>
    </article>

</body>
</html>