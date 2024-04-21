<?php
include('./includes/config.php');
include('./includes/header2.php');

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
    <input type="file" name="image" id="img" accept="image/*" onchange="previewImage(event)">
    
    <button type="submit" name="submit">Submit</button>
    <div class="img-area">
        <img src="" id="preview" alt="Preview">
    </div>
</form>
</main>
<script>
    const selectImage = document.querySelector('.select-image');
    const inputFile = document.querySelector('#img');
    const imgArea = document.querySelector('.img-area');
    selectImage.addEventListener('click', () => {
        inputFile.click()
    });

    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function() {
            preview.src = reader.result;
        }

        if(file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>

<?php  
    include('./includes/footer.php');
    ?>