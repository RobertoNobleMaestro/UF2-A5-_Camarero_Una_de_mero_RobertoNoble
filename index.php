<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Carta de Sushi</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3bc5094caf.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/logo.png">
  </head>
  <body>
    <div class="row">
    <header>
      <img src="img/logo.png" alt="">
    </header>
      <?php
        $menu = simplexml_load_file('xml/menu.xml');
        foreach ($menu->categoria as $categoria) {
          echo '<div class="categoria">';
          echo '<h2 class="categoria-title">' . $categoria['nombre'] . '</h2>';
          foreach ($categoria->plato as $plato) {
            echo '<div class="plato-nombre">' . $plato->nombre . '_____________________' . $plato->precio . '</p>' . '</div>';
            echo '<div class="plato-descripcion">' . '<p>' . $plato->descripcion . '</p>' . '</div>';            
            echo '<div class="plato-calorias">' . '<p>' . $plato->calorias . '</p>' . '</div>';
            if(isset($plato->caracteristicas->item['Categoria1']) && $plato->caracteristicas->item['Categoria1'] == 'glutenfree'){
              echo '<div class="plato-icon" title="Libre de gluten"><i class="fas fa-seedling"></i></div>';
            }
            if(isset($plato->caracteristicas->item['Categoria2']) && $plato->caracteristicas->item['Categoria2'] == 'carne'){
              echo '<div class="plato-icon" title="Contiene carne"><i class="fas fa-drumstick-bite"></i></div>';
            }
            if(isset($plato->caracteristicas->item['Categoria3']) && $plato->caracteristicas->item['Categoria3'] == 'pescado'){
              echo '<div class="plato-icon" title="Contiene pescado"><i class="fas fa-fish"></i></div>';
            }
            if(isset($plato->caracteristicas->item['Categoria4']) && $plato->caracteristicas->item['Categoria4'] == 'alcohol'){
              echo '<div class="plato-icon" title="Contiene alcohol"><i class="fas fa-wine-bottle"></i></div>';
            }
            if(isset($plato->caracteristicas->item['Categoria5']) && $plato->caracteristicas->item['Categoria5'] == 'vegano'){
              echo '<div class="plato-icon" title="Vegano"><i class="fas fa-carrot"></i></div>';
            }
            echo '<hr>';

          }
          echo '</div>';
        }
      ?>
      <!-- <table class="icon">
        <thead>
        </thead>
        <tbody>
          <tr>
            <td><i class="fas fa-seedling"></i></td>
            <td>Libre de gluten</td>
          </tr>
          <tr>
            <td><i class="fas fa-drumstick-bite"></i></td>
            <td>Contiene carne</td>
          </tr>
          <tr>
            <td><i class="fas fa-fish"></i></td>
            <td>Contiene pescado</td>
          </tr>
          <tr>
            <td><i class="fas fa-wine-bottle"></i></td>
            <td>Contiene alcohol</td>
          </tr>
          <tr>
            <td><i class="fas fa-carrot"></i></td>
            <td>Vegano</td>
          </tr>
        </tbody>
      </table> -->
    </div>
  </body>
</html>
