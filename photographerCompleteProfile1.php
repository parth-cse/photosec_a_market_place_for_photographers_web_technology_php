<?php
include("./includes/config.php");
include("./includes/header2.php");

if($_SESSION['loggedin'] === false){
    echo "<script> alert(\"Please login first!\"); window.location = \"photographerLogin.php\"; </script>";
}

$email = $_SESSION['email'];

if(isset($_POST["submit"])) {
    $profile_name = $_FILES['profile']['name'];
    $profile_tmpname = $_FILES['profile']['tmp_name'];
    $profile_folder = './static/img/upload/'.date('Y-m-d')."-". $profile_name;

    $sample1_name = $_FILES['sample1'];

    $sql = "UPDATE photographeruser SET photo1 = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $profile_folder, $email);

    if ($stmt->execute()) {
        if (move_uploaded_file($profile_tmpname, $profile_folder)) {
            echo "<script>alert(\"Upload Successful\"); window.location='photographerCompleteProfile2.php';</script>";
        } else {
            echo "<script>alert(\"Error moving uploaded file\");</script>";
        }
    } else {
        echo "<script>alert(\"Error updating database: " . $conn->error . "\");</script>";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <img class="mb-4" src="./static/img/site/logo/logo.png" alt="" height="57">
    <h1 class="h3 mb-3 fw-normal">Complete Your Profile</h1>
    <h1 class="h5 mb-3 fw-normal">Step 2: Upload Sample Photo 1</h1>
    
    <div class="profile-upload">
        <label for="profile-file" id="profile-label">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
            </svg><br>
            <p>Sample Image 1</p>
        </label>
        <input type="file" id="profile-file" name="profile" accept="image/x-png, image/jpeg" style="display: none;" required>
        <div id="profile-preview" class="preview"></div>
    </div>
    <br>
    

    <button class="btn btn-primary w-100 py-2" type="submit" name="submit">Submit</button>
</form>

<script>
    const profileInput = document.getElementById('profile-file');
    const profileLabel = document.getElementById('profile-label');
    const profilePreview = document.getElementById('profile-preview');

    profileInput.addEventListener('change', function() {
        const file = profileInput.files[0];
        const reader = new FileReader();

        reader.onload = function(event) {
            const img = document.createElement('img');
            img.src = event.target.result;
            profilePreview.innerHTML = '';
            profilePreview.appendChild(img);
        };

        reader.readAsDataURL(file);
    });

    profileLabel.addEventListener('click', function() {
        profileInput.click();
    });
</script>
