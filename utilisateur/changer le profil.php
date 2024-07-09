<?php
 include('connexionBD.php');
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
 $PPR=$_SESSION['PPR'];
 $PWD= $_SESSION['pwd'];
 $sel_E=$pdo->prepare("SELECT * from ensiengant where PPR = ? and Mot_de_passe = ?");
 $sel_A=$pdo->prepare("SELECT * from administratif where PPR = ? and Mot_de_passe = ?");
 $sel_E->execute(array($PPR,md5($PWD)));
 $user1= $sel_E->fetch();
 $sel_A->execute(array($PPR,md5($PWD)));
 $user2= $sel_A->fetch();

 if($user1){
    $id = $user1["PPR"];
    $name = $user1["Nom"];
    $image=$user1["image"];
 }else if($user2){
    $id = $user2["PPR"];
    $name = $user2["Nom"];
    $image=$user2["image"];
 }

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style1.css">
    
  </head>
  <body>
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <div class="afficher_img_profil">
        <img src="img/<?php echo $image;?>" width = 125 height = 125 title="<?php echo $image; ?>">
        </div>
      </div>
    </form>
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
    <?php
    if(isset($_FILES["image"]["name"])){
      $id = $_POST["id"];
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../updateimageprofile';
        </script>
        ";
      }
      elseif ($imageSize > 1200000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../updateimageprofile';
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query1 = "UPDATE ensiengant SET image = '$newImageName' Where PPR=$sessionPPR ";
        $query2 = "UPDATE administratif SET image = '$newImageName' Where PPR=$sessionPPR ";
        if($query1){
        mysqli_query($pdo, $query1);
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        }else if($query2){
            mysqli_query($pdo, $query2);
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        }
        echo
        "
        <script>
        document.location.href = '../updateimageprofile';
        </script>
        ";
        
      }

    }
    ?>
  </body>
</html>
