
<?php
        include('./includes/config.php');
        include('./includes/header2.php');


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rank1 = $_POST['rank1'];
            $rank2 = $_POST['rank2'];
            $rank3 = $_POST['rank3'];
          
          $update = "Update toprank SET rank1 = '$rank1', rank2='$rank2', rank3='$rank3' WHERE id =1";  //updating the database with
          if($conn->query($update)){
                echo "<script>alert('Top 3 Photographer Updated'); window.location='index.php';</script>";
            }
            else {
              echo "<script>alert('Invalid email id or password);</script>";
            }
          }
      
    ?>
    <form  action="" method="post">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">Give Emails of top 3 Photographers</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="rank1" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Rank 1</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name="rank2" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Rank 2</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name="rank3" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Rank 3</label>
    </div><br>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary"><a href="./adminDashboard.php">Go Back</a></p>
    </form>

  <?php
    include('./includes/footer2.php');
    ?>