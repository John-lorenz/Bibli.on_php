<?php 
  $conexao = require __DIR__ . "/bancodedados.php";
  $id = $conexao -> real_escape_string($_GET['id']);
  $titulo = $conexao -> real_escape_string( $_GET['titulo']);
  $autor = $conexao -> real_escape_string( $_GET['autor']);
  $genero =  $conexao -> real_escape_string($_GET['genero']);
  $linkImagem =  $conexao -> real_escape_string($_GET['linkImagem']);
  echo "
<div>
<form  action='./assets/editar_livro.php' method='POST' enctype='multipart/form-data'>
<table class='demTable'>
<thead>
  <tr>
          <th>Coluna</th>
          <th>Valor</th>
  </tr>
</thead>
<tbody>
  <tr>
          <td>&nbsp;id</td>
          <td>&nbsp;<input type='text' name='id' value='$id' readonly></td>
  </tr>
  <tr>
          <td>&nbsp;titulo</td>
          <td>&nbsp;<input type='text' name='titulo' value='$titulo'></td>
  </tr>
  <tr>
          <td>&nbsp;autor</td>
          <td>&nbsp;<input type='text' name='autor' value='$autor'></td>
  </tr>
  <tr>
          <td>&nbsp;genero</td>
          <td>&nbsp;<select name='livro_genero'>
          <option value='Romance'>Romance</option>
          <option value='Aventura'>Aventura</option>
          <option value='Ficção Científica'>Ficção Científica</option>
          <option value='Poesia'>Poesia</option>
          <option value='Suspense'>Suspense</option>
          <option value='Biografia'>Biografia</option>
          <option value='História'>História</option>
          <option value='Autoajuda'>Autoajuda</option>
          <option value='Negócios e Finanças'>Negócios e Finanças</option>
  </select></td>
  </tr>
  <tr>
          <td>&nbsp;linkImagem</td>
          <td>&nbsp;<input type='file' name='linkImagem' value='$linkImagem'></td>
  </tr>
</tbody>
</table>
<input type='submit' value='Executar'>
</form>
</div>
<div>";
  

          
          echo "<h2>$titulo</h2>";
          if (!empty($linkImagem)) {
                  echo "<img src='$linkImagem' width=250px></img>";
          } else {
                  echo '<div style="position: relative"><img src="./images/livro-da-vida.jpg" width="250px">
                  <div class="centro" style="font-size:30px">'.$autor.':<br>'.$titulo.'</div></div>';
          }
  $conexao -> close();
?>