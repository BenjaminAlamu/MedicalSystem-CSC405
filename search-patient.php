<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/results.css">
    <title>Admin|Search Results</title>
  </head>
  <body>

  <?php include "inc/header.php"; ?>
  <?php
        if ($_SESSION['staff_type'] == "doctor"){
          include "inc/doctorleft.php";
        }
        elseif ($_SESSION['staff_type'] == "supportstaff"){
          include "inc/supportleft.php";
        }
        ?>

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio recusandae, sed nulla commodi, nemo odit maiores in, ut modi quas consequatur repellendus qui excepturi ipsum ullam. Unde quasi, vero laudantium labore adipisci iusto harum laborum sint error velit non, repudiandae odio consequatur doloribus ipsa corporis illum sed quo? Eligendi corporis sint illo impedit quae mollitia, quas quo, dolor ut fugiat tempora debitis laudantium at tenetur, natus odio voluptatem nemo. Laudantium maiores sit tempora culpa reiciendis enim facere temporibus aliquam sint, placeat asperiores perferendis necessitatibus suscipit ea repudiandae vel quis architecto consequuntur nostrum cumque quibusdam deleniti! Provident, itaque esse incidunt iste quas libero laudantium eos molestiae id in? Vel nisi nostrum tenetur veritatis assumenda eos minus hic? Asperiores impedit, magni laboriosam harum earum sint reiciendis? Quod commodi vel laborum, est reiciendis obcaecati veniam officiis possimus? Numquam molestias similique accusamus magni dolorem nostrum accusantium quo deserunt reiciendis! Eveniet sint quos aliquid odit. Aliquid, nihil delectus quia at odit, tenetur iste minus obcaecati provident corrupti rem quos. Dolore quae sunt labore laudantium corporis accusamus vel eum ab voluptatem earum, repellendus nulla ea corrupti voluptate similique porro dolorum accusantium quis assumenda reprehenderit! Ducimus natus quis deleniti officia amet accusantium? Consequuntur provident hic blanditiis autem?

  <div class = "rightside">
      <div>
          <?php include "inc/database.php"; 
          echo "<br>";
          $query = $_POST["search-patient"];
          
          $sql = $conn -> query("SELECT * FROM patient_bio WHERE firstname like '%" . $query . "%'  OR lastname like '%" . $query . "%'");
          //echo $sql;
          $sql = $sql -> fetchAll(PDO::FETCH_ASSOC);
          echo '<div class = "result-box">';
          foreach($sql as $result){
              echo '<div class = "result-item">';
              echo "<h3> " . $result["firstname"] . " " . $result["lastname"] . " </h3>";
              echo "<br>";
              echo "<a href = 'editpatient.php?id=". $result["id"] . "'>Edit</a>";
              echo "<a href = 'deletepatient.php?id=". $result["id"] . "'>Delete</a>";
              echo "<a href = 'insert.php?id=". $result["id"] . "'>Add Patient History</a>";
              echo "<a href = 'view.php?id=". $result["id"] . "'>View Patient History</a>";
              echo '</div>';
          }
          echo '</div>';
          ?>

      </div>
  </div>
  
</body>
</html>

