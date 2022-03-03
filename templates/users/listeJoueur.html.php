<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste joueur</title>
    <link rel="stylesheet" href="<?=PATH_PUBLIC."css".DIRECTORY_SEPARATOR."listeJoueur.css"?>"> 
</head>
<body>
<div id="container">
  <div id="head">
      <div id="txt">LE PLAISIR DE JOUER</div>
  </div>
  <div id="block">
    <div id="cp">CREER ET PARAMETRER VOTRE QUIZ</div>
    <div> <button>DECONNEXION</button></div>
    <div id="corp">
    <div id="partiecreation">
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>
             <a>Liste Questions</a>
            </td>
            <td><img src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" name="ic-liste.png"></td>
        </tr>
        <tr>
            <td>
             <a>Créer Admin</a>
            </td>
            <td><img src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>"></td>
        </tr>
        <tr>
            <td>
             <a>Liste joueurs</a>
            </td>
            <td><img src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR."ic-list-ajout-active.png" ?>"></td>
        </tr>
        <tr>
            <td>
             <a>Créer Questions</a>
            </td>
            <td><img src="<?=PATH_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>"></td>
        </tr>
    </table>
    </div>
   
    <div class="table-data">
        <div class="order">
            <div class="head">
            <h3>Liste des Joueurs</h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
        </div>
            <table>
            <thead>
                <tr>
                <th>Nom et Prenom</th>
                <th>Score</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($data as $value):?>
                <tr>
                <td>
                <img src="">
                <p><?=$value['nom_complet']?></p>
                </td>
                <td><?=$value['score']?></td>
                </tr>
            <?php endforeach?>
             </tbody>
            </table>
        </div>
         </div>
    </div>
  </div>  
</div>
</body>
</html>