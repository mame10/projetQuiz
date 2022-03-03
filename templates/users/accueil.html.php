<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  height: 5rem;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 1.5rem;
}

li a:hover {
  background-color: #111;
}

</style>
</head>



<body >
<ul>
  <li><a class="active" href="<?=WEBROOT."?controller=user&action=accueil"?>">Home</a></li>
  <?php if(is_admin()) :?>
  <li><a href="?controller=user&action=liste.joueur">Liste joueur</a></li>
  <?php endif ?>
  <?php if(is_joueur()) :?>
  <li><a href="<?=WEBROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></li>
    <?php endif ?>
</ul>

  
</body>
</html>

