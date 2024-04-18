<?php
    include('./includes/config.php');
    include('./includes/header.php');

    $email = $_SESSION['email'];

    if(isset( $_POST["submit"])) { 
        $file_name = $_FILES['image']['name'];
        $tmpname = $_FILES[ 'image' ][ 'tmp_name'];
        $folder = './static/img/upload/'.date('Y-m-d')."-".$file_name;
        $sql = "UPDATE clientuser SET profile = ? WHERE email = ?";

        $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ss", $folder, $email);

    // Execute the statement
    $stmt->execute();

        if(move_uploaded_file($tmpname, $folder) == true){
            echo "<script>alert(\"Upload Successful\");</script>";
        }else{
            die("There was an error uploading the file, please try again!");
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="img" accept="image/*" >
        
        <button type="submit" name="submit">Submit</button>
        <div class="img-area"></div>
    </form>

    <script>
        const selectImage = document.querySelector('.select-image');
        const inputFile = document.querySelector('#img');
        const imgArea = document.querySelector('.img-area');
        selectImage.addEventListener('click', () => {
            inputFile.click()
        });
    </script>

    <?php  
        include('./includes/footer.php');
        ?>