  <?php
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $username = $_POST['nome'];
    $job = $_POST['job'];
$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);


    if(isset($name)){
       if(!empty($name)){
          $location = 'uploads/';
          if(move_uploaded_file($tmp_name, $location.'('.$job.')'.$username.'.'.$ext)){
             echo Uploaded;
          }else{
          echo 'Please choose a file.';
          }
        }
    }

    ?>

            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <br/>
                <label>Nome:</label>
                <input type="text" name="nome" id="nome">
                <br />
                <label>Cargo:</label>
                <input type="text" name="job" id="job">
                <br/>
                <input type="submit" value="Submit">
            </form>