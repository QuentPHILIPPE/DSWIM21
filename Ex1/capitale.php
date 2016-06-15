<?php 

  require_once 'parametre.php';
  $reqq = $db->query("SELECT * FROM capitale");
  extract($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
  <meta charset= "latin1" />
  <head>
    <title>Capitale</title>
  </head>
  <body>
    <h1>
    
    </h1>
    
    <form method ="POST">
      <table>
        <tr><td><label>Capitale</label></td><td>
          <select name="nom" required>
        <?php
          $req = $db->query("SELECT DISTINCT nom FROM capitale");
          foreach ($req as $result) { ?>
            <option><?php echo $result['nom']; ?></option>  
          <?php } ?>
        </select>
          </td></tr>
                <tr><td></td><td><input type="submit" value="Envoyer"/></td></tr>

      </table>
      
      <div>
        <?php if(isset($_POST['nom'])) {
                echo $nom;
          
      $stmt = $db->prepare("SELECT image FROM capitale where nom = ?");
      if ($stmt->execute(array($nom))) {
        while ($row = $stmt->fetch()) {
         
          echo '<img src='.$row['image'].' height="500" width="500">';
        }
      }

          $req3 = $db->prepare("SELECT * FROM distance");
         // $req3->bindValue(':distance', $distance, PDO::PARAM_SRT);
          $req3->execute(); 
  
      } ?>
        
      </div>

    </form>

  </body>
</html>