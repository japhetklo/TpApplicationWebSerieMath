<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>TP test Math</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="sidebar">
      <ul>
        <li><a href="#Addition" onclick="showContent('Addition')">Addition de deux nombres</a></li>
        <li><a href="#PGN" onclick="showContent('PGN')">Les plus grand nombre</a></li>
        <li><a href="#traduction" onclick="showContent('traduction')">Traduction Jours</a></li>
      </ul>
    </div>
    <div id="content">
      <h2>Contenu central</h2>
      <p>Sélectionnez un menu sur la gauche pour afficher son contenu ici.</p>
    </div>
    
   <script>
    function showContent(menu) {
    var content = document.getElementById("content");
    if (menu == "Addition") {
      content.innerHTML = "<h2>Addition</h2><p></p>";
    } else if (menu == "PGN") {
      content.innerHTML = "<h2>Plus grand nombre</h2><p>Contenu du menu 2</p>";
    } else if (menu == "traduction") {
      content.innerHTML = "<h2>Traduire les jours de la semaine</h2><p>Contenu du menu 3</p>";
    }
  }
   </script>
  </body>
</html>

