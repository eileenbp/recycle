<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();

    $con = mysqli_connect("localhost", "root", "", "recycle-management");
    if(isset($_FILES['fileToUpload'])){
        $errors= array();
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size =$_FILES['fileToUpload']['size'];
        $file_tmp =$_FILES['fileToUpload']['tmp_name'];
        $file_type=$_FILES['fileToUpload']['type'];
  
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"./imgs/upload/".$file_name);
           echo "Success";
        }else{
           print_r($errors);
        }
     }
    ?>
    <form method='post' name='advertise-form' enctype='multipart/form-data'>
           <div class='div_user'>
                                                    <p class='text_user'>   عکس  : </p>
                                                    <input type='file' name='fileToUpload' id='fileToUpload' >
                                                    <p class='eror fileToUpload-error'></p>
                                                    
                                                </div>
                                                <input id='btn_user_auth2' type='submit' name='sell_edit_submit'  value='ویرایش'>
    </form>

    
</body>
</html>

