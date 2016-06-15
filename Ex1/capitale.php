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
          $req=$db->query("SELECT DISTINCT nom FROM capitale");
          foreach ($req as $result) { ?>
            <option><?php echo $result['nom']; ?></option>  
          <?php } ?>
        </select>
          </td></tr>
                <tr><td></td><td><input type="submit" value="Envoyer"/></td></tr>

      </table>
      
      <div>
        <?php if(isset($_POST['nom'])) {
                echo $_POST['nom'];
        
          $req = $db->prepare("SELECT image FROM capitale where nom =:nom");
          $req->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
          $req->execute();

          if ($req->fetch())
  	      {     
           
          foreach ($req as $result) { ?>
            <img src="<?php echo $result ?>" alt="" height="100" width="100">
         
       <?php }
		       
	        }
  
          $req = $db->prepare("SELECT * FROM distance");
          $req->execute();    
  
      } ?>
        
      </div>

    </form>

  </body>
</html>