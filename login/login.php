<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "recycle-management");
  //validate data
  function validate ($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  



    // vorod karbar 
    if(isset($_POST['btnsabt'])){

        // echo "vard";
        $username= validate($_POST['namekarbari']);
        $password=validate($_POST['pass']);
        $password=sha1($password);

   
        // $username = mysqli_real_escape_string($con, $_POST['namekarbari']);
        $logcheek = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND pass='$password'");


        // $p = mysqli_fetch_array($logcheek);
 
        // print_r($p);
        echo $username;

       

        if(mysqli_num_rows($logcheek)>0 && $username=='admin'){


            // $row = mysqli_fetch_assoc($logcheek);
            $_SESSION['user-login'] = $username;
            header("Location:../adminPanel/admin.php ");



            
    

        }
        elseif(mysqli_num_rows($logcheek)>0 ){
            $_SESSION['user-login'] = $username;
            header("Location: ../index.php");


            

        }

        else{

            $_error = "نام کاربری یا رمز عبور صحیح نیست!";
        }

    };


    // sabt name karbar 
    if(isset($_POST['btnsabt_2'])){


        $sbt_name=validate($_POST['sbt_name']);
        $sbt_email=validate($_POST['sbt_email']);
        $sbt_password=validate($_POST['sbt_pass']);
        $sbt_password=sha1($sbt_password);
        $check=mysqli_query($con, "SELECT * FROM `user` WHERE username='$sbt_name'");
        $check2=mysqli_query($con, "SELECT * FROM `user` WHERE email='$sbt_email'");
        
        if(mysqli_num_rows($check)>0 || mysqli_num_rows($check2)>0){
            $_error = "نام کاربری یا ایمیل تکراری است!";
        }
        else{
            $Add = mysqli_query($con, "INSERT INTO user(username, email, pass) VALUES ('$sbt_name', '$sbt_email', '$sbt_password')");

            $_SESSION['user-login'] = $sbt_name;
    
            header("Location: ../index.php");
        }





        // $etbar_email = test_input($_POST["sbt_email"]);
        // if(!filter_var($etbar_email, FILTER_VALIDATE_EMAIL)){

        //     
        // }




     

    };

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایران سبز</title>
    
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="title icon" type="image/png" href="../imgs/i5.png">


    <style>
        .error{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(214, 104, 104);
            color:white;
            height: 40px;
        }


    </style> 

</head>

<body>


    
            <?php

                if(isset($_error)){

                    echo "<div class='error'>";

                        echo $_error;

                    echo "</div>";


                }

            ?>


    <div class="container">



        <div class="login-registration">



            <div class="forms">

                <div class="title">

                    <p> ایران سبز</p>

                    <a href="../index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>
                    </a>

                </div>

                <div class="form-login">

                    <form action ="" class="form form_login_f" method="post">

                        <div class="username">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>

                            <input id="username_login" type="text" placeholder="نام کاربری" name="namekarbari">

                        </div>

                        <p id="username_error_login">نام کاربری نمی تواند خالی باشد.</p>



                        <div class="password">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                            </svg>

                            <input id="password_login" type="password" placeholder="پسورد" name="pass">

                        </div>

                        <p id="password_error_login">پسورد حداقل 6 کارکتر است.</p>



                        <a href="" id="link-login">حساب کاربری ندارید؟ ثبت نام</a>


                        <!-- <button name="btnsabt" class="button btn_login">ورود</button> -->
                        <input type="submit" name="btnsabt" class="button btn_login" value="ورود">

                    </form>

                </div>

                <div class="form-registration">

                    <form action ="" class="form form_registration_f" method="post">

                        <div class="username">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>

                            <input id="username_registration" type="text" placeholder="نام کاربری" name="sbt_name">

                        </div>

                        <p id="username_error_registration">نام کاربری نمیتواند خالی باشد.</p>


                        <div class="email">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>

                            <input id="email_registration" type="text" placeholder="ایمیل" name="sbt_email">

                        </div>

                        <p id="email_error">ایمیل نامعتبر است.</p>



                        <div class="password">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                            </svg>

                            <input id="password_registration" type="password" placeholder="پسورد" name="sbt_pass">

                        </div>

                        <p id="password_error_registration">پسورد حداقل 6 کارکتر است.</p>


                        <a href="" id="link-register">حساب کاربری دارید؟ ورود</a>


                        <!-- <button class="button btn_login">ثبت نام</button> -->
                        <input type="submit" name="btnsabt_2" class="button btn_login" value="ثبت نام">



                    </form>

                </div>

            </div>


            <div class="img">
               
                <img src="../imgs/login/l1.png" alt="">
            </div>



        </div>





    </div>








    <script src="../js/login.js"></script>






    
</body>







</html>