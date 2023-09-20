<?php
    session_start();

    $con = mysqli_connect("localhost", "root","", "recycle-management");
    $check_sell = mysqli_query($con, "SELECT * from adver  where status='0' AND  advertype='1'" );
    $check_buy = mysqli_query($con, "SELECT * from adver  where status='0' AND  advertype='0'" );
    $check_auc = mysqli_query($con, "SELECT * from auction  where status='0'" );
///sell
    //submit_sell_confirm
    if(isset($_POST['submit_sell_confirm']))
    {
         
    $adver_id=$_POST['adver_id_confirm'];

    $edit =  mysqli_query($con, "UPDATE adver SEt status='1' where adver_id=$adver_id ");        
    header("Refresh:0");
  
    }
    ///submit_sell_reject
    if(isset($_POST['submit_sell_reject']))
    {
             
    $adver_id=$_POST['adver_id_reject'];
    $edit =  mysqli_query($con, "UPDATE adver SEt status='-1' where adver_id=$adver_id ");        

        
        header("Refresh:0");
      
    }
///buy
if(isset($_POST['submit_buy_confirm']))
{
     
$adver_id=$_POST['adver_id_confirm'];

$edit =  mysqli_query($con, "UPDATE adver SEt status='1' where adver_id=$adver_id ");        
header("Refresh:0");

}
///submit_sell_reject
if(isset($_POST['submit_buy_reject']))
{
         
$adver_id=$_POST['adver_id_reject'];
$edit =  mysqli_query($con, "UPDATE adver SEt status='-1' where adver_id=$adver_id ");        

    
    header("Refresh:0");
  
}

///auction
if(isset($_POST['submit_auc_confirm']))
{
     
$adver_id=$_POST['adver_id_confirm'];

$edit =  mysqli_query($con, "UPDATE auction SEt status='1' where auction_id=$adver_id ");        
header("Refresh:0");

}
///submit_sell_reject
if(isset($_POST['submit_auc_reject']))
{
         
$adver_id=$_POST['adver_id_reject'];
$edit =  mysqli_query($con, "UPDATE auction SEt status='-1' where auction_id=$adver_id ");        

    
    header("Refresh:0");
  
}






?>
 

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایران سبز</title>
     <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/new.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="title icon" type="image/png" href="imgs/title.png">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->

<style>
.eror{
    color: red;
    font-size: smaller;
}
table {
        font-family: YekanBakhMedium;
        border-collapse: collapse;
        width: 100%;
    }

td, th {
border: 1px solid #dddddd;
text-align: center;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
.eror{
    color: red;
    font-size: smaller;
}
</style>

  
</head>


<body>

    <div class="container">


    <!-- -------------------------------------------------header--------------------------------------------------  -->
    <header>

        <div class="header-top">
<br>
            



            </div>      
          
            </nav>

            <div class="d-svg-header">
            <a style="font-family:'iranyekanwebmedium' ;" href="../adminPanel/admin.php">پنل ادمین </a>

                <!-- icon Exit  -->

                <?php
                    if(isset($_SESSION['user-login'])){

                        echo "<a  href='../test.php'>";

                            echo "<svg class='svg-icon' viewBox='0 0 20 20'>";

                                echo "<path fill='none' d='M18.271,9.212H3.615l4.184-4.184c0.306-0.306,0.306-0.801,0-1.107c-0.306-0.306-0.801-0.306-1.107,0
                                    L1.21,9.403C1.194,9.417,1.174,9.421,1.158,9.437c-0.181,0.181-0.242,0.425-0.209,0.66c0.005,0.038,0.012,0.071,0.022,0.109
                                    c0.028,0.098,0.075,0.188,0.142,0.271c0.021,0.026,0.021,0.061,0.045,0.085c0.015,0.016,0.034,0.02,0.05,0.033l5.484,5.483
                                    c0.306,0.307,0.801,0.307,1.107,0c0.306-0.305,0.306-0.801,0-1.105l-4.184-4.185h14.656c0.436,0,0.788-0.353,0.788-0.788
                                    S18.707,9.212,18.271,9.212z'>";
                                echo "</path>";

                            echo "</svg>";

                        echo "</a>";

                    }

                ?>


            </div>

        </div>


       

    </header>



    <!-- -------------------------------------------------main--------------------------------------------------  -->
    <div style="background: #ffffff;" class="main-div"> 
    <!-- products  -->
    <div class="products">
    <!-- owl-title -->
    <div class="owl-title">
      <p>مدیریت آگهی </p>

    

    </div>
            
    
    </div>
    <div class="main">
    <div class="main-div">
        

        <div class=main-info>
          <span>آگهی مورد نظر خود را انتخاب کنید:</span>
          <br>
          <br>
          <form method="post">
                  <input type="checkbox" id="my1" name="my1" value="0">
                  <label for="my1">آگهی خرید </label>
                  <input type="checkbox" id="my2" name="my2" value="1">
                  <label for="my2">آگهی فروش </label>
                  <input type="checkbox" id="my3" name="my3" value="2">
                  <label for="my3">آگهی مزایده </label><br>
                  <input id='btn_user_auth2' type='submit' name='submit' value='نمایش'>

                 


          </form>
          
        </div>
    </div>
    <?php

if(isset($_POST['submit'])) {
    if(isset($_POST['my2'])) {?>
  

    <!-- owl-title -->
        <div class="owl-title">
           <p>آگهی فروش </p>  

        </div>
        <table>
                                <tr>
                                    <th>شماره</th>
                                    <th>کد کاربرآگهی‌دهنده </th>
                                    <th> عنوان </th>
                                    <th> وزن</th>
                                    <th> واحد</th>
                                    <th> قیمت</th>
                                    <th> توضیحات</th>
                                    <th> عکس</th>
                                    
                                </tr>
                                <?php 
                                    $i=1;
                                    while($checks = mysqli_fetch_array($check_sell)){ ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $checks['user_id'] ?></td>
                                    <td><?php echo $checks['title'] ?></td>
                                    <td><?php echo $checks['weigth'] ?></td>
                                    <td> <?php 
                                                if($checks['weigth_unit']=='0')
                                                    $bweigth_unit='تن';
                                                elseif($checks['weigth_unit']=='1')
                                                    $bweigth_unit='کیلوگرم';
                                                else
                                                 $bweigth_unit='عدد';
                                                 echo $bweigth_unit; ?></td>                                    
                                    <td><?php echo $checks['price'] ?></td>
                                    <td><?php echo $checks['description'] ?></td>
                                    <td><a target="_blank"  href="./image.php?image=<?php echo $checks['image']?>"><?php echo $checks['image'] ?></a></td>
                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_confirm' id='w1'  type='text' value=<?php echo $checks['adver_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:green; padding:5px;" type='submit' name='submit_sell_confirm' value='تایید'>
                                    </form></td>
                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_reject' id='w1'  type='text' value=<?php echo $checks['adver_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:red; padding:5px;" type='submit' name='submit_sell_reject' value='رد'>
                                    </form></td>

                                </tr>
                                <?php } ?>
                               


                            </table>

        <?php }
        if(isset($_POST['my1'])) {?>
           <div class="owl-title">
           <p>آگهی خرید </p>  
           <table>
                                <tr>
                                    <th>شماره</th>
                                    <th>کد کاربرآگهی‌دهنده </th>
                                    <th> عنوان </th>
                                    <th> وزن</th>
                                    <th> واحد</th>
                                    <th> قیمت</th>
                                    <th> توضیحات</th>
                                    
                                </tr>
                                <?php 
                                    $i=1;
                                    while($checks = mysqli_fetch_array($check_buy)){ ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $checks['user_id'] ?></td>
                                    <td><?php echo $checks['title'] ?></td>
                                    <td><?php echo $checks['weigth'] ?></td>
                                    <td> <?php 
                                                if($checks['weigth_unit']=='0')
                                                    $bweigth_unit='تن';
                                                elseif($checks['weigth_unit']=='1')
                                                    $bweigth_unit='کیلوگرم';
                                                else
                                                 $bweigth_unit='عدد';
                                                 echo $bweigth_unit; ?></td>                                    
                                    <td><?php echo $checks['price'] ?></td>
                                    <td><?php echo $checks['description'] ?></td>
                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_confirm' id='w1'  type='text' value=<?php echo $checks['adver_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:green; padding:5px;" type='submit' name='submit_buy_confirm' value='تایید'>
                                    </form></td>
                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_reject' id='w1'  type='text' value=<?php echo $checks['adver_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:red; padding:5px;" type='submit' name='submit_buy_reject' value='رد'>
                                    </form></td>

                                </tr>
                                <?php } ?>
                               


                            </table>

        </div>
        <?php }
        if(isset($_POST['my3'])) {?>
  

      <!-- owl-title -->
      <div class="owl-title">
         <p>آگهی مزایده </p>  
         <table>
                                <tr>
                                    <th>شماره</th>
                                    <th>کد کاربرآگهی‌دهنده </th>
                                    <th> عنوان </th>
                                    <th> وزن</th>
                                    <th> واحد</th>
                                    <th> توضیحات</th>
                                    <th> عکس</th>

                                    
                                </tr>
                                <?php 
                                    $i=1;
                                    while($checks = mysqli_fetch_array($check_auc)){ ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $checks['user_id'] ?></td>
                                    <td><?php echo $checks['title'] ?></td>
                                    <td><?php echo $checks['weigth'] ?></td>
                                    <td> <?php 
                                                if($checks['weigth_unit']=='0')
                                                    $bweigth_unit='تن';
                                                elseif($checks['weigth_unit']=='1')
                                                    $bweigth_unit='کیلوگرم';
                                                else
                                                 $bweigth_unit='عدد';
                                                 echo $bweigth_unit; ?></td>                                    
                                    <td><?php echo $checks['description'] ?></td>
                                    <td><a target="_blank"  href="./image.php?image=<?php echo $checks['a_image']?>"><?php echo $checks['a_image'] ?></a></td>

                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_confirm' id='w1'  type='text' value=<?php echo $checks['auction_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:green; padding:5px;" type='submit' name='submit_auc_confirm' value='تایید'>
                                    </form></td>
                                    <td>  <form method='post'>
                                    <input class='input_user' style="display: none;" name='adver_id_reject' id='w1'  type='text' value=<?php echo $checks['auction_id']; ?>>
                                    <input style="font-family: 'YekanBakhMedium';color:red; padding:5px;" type='submit' name='submit_auc_reject' value='رد'>
                                    </form></td>

                                </tr>
                                <?php } ?>
                               


                            </table>

      </div>


    <?php }}?>
    </div>
    

    <!-- -------------------------------------------------footer--------------------------------------------------  -->
    <footer>


        <!-- svg-footer  -->
        <div class="svg-wave-footer">
  

            <svg preserveAspectRatio="xMidYMin slice" style="height: 40px; filter: drop-shadow(0px 3px 2px rgb(0 0 0 / 0.2));" viewBox="0 0 1056 4" xmlns="http://www.w3.org/2000/svg">
                <path style="fill :#ffffff;" class="elementor-shape-fill" d="M1035.025 1.916c-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C1027.889 3.249 1025.893 4 1024 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C1011.889 3.249 1009.893 4 1008 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C995.889 3.249 993.893 4 992 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C979.889 3.249 977.893 4 976 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C963.889 3.249 961.893 4 960 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C947.889 3.249 945.893 4 944 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C931.889 3.249 929.893 4 928 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C915.889 3.249 913.893 4 912 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C899.889 3.249 897.893 4 896 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C883.889 3.249 881.893 4 880 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C867.889 3.249 865.893 4 864 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C851.889 3.249 849.893 4 848 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C835.889 3.249 833.893 4 832 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C819.889 3.249 817.893 4 816 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C803.889 3.249 801.893 4 800 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C787.889 3.249 785.893 4 784 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C771.889 3.249 769.893 4 768 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C755.889 3.249 753.893 4 752 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C739.889 3.249 737.893 4 736 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C723.889 3.249 721.893 4 720 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C707.889 3.249 705.893 4 704 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C691.889 3.249 689.893 4 688 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C675.889 3.249 673.893 4 672 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C659.889 3.249 657.893 4 656 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C643.889 3.249 641.893 4 640 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C627.889 3.249 625.893 4 624 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C611.889 3.249 609.893 4 608 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C595.889 3.249 593.893 4 592 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C579.889 3.249 577.893 4 576 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C563.889 3.249 561.893 4 560 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C547.889 3.249 545.893 4 544 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C531.889 3.249 529.893 4 528 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C515.889 3.249 513.893 4 512 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C499.889 3.249 497.893 4 496 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C483.889 3.249 481.893 4 480 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C467.889 3.249 465.893 4 464 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C451.889 3.249 449.893 4 448 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C435.889 3.249 433.893 4 432 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C419.889 3.249 417.893 4 416 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C403.889 3.249 401.893 4 400 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C387.889 3.249 385.893 4 384 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C371.889 3.249 369.893 4 368 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C355.889 3.249 353.893 4 352 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C339.889 3.249 337.893 4 336 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C323.889 3.249 321.893 4 320 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C307.889 3.249 305.893 4 304 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C291.889 3.249 289.893 4 288 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C275.889 3.249 273.893 4 272 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C259.889 3.249 257.893 4 256 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C243.889 3.249 241.893 4 240 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C227.889 3.249 225.893 4 224 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C211.889 3.249 209.893 4 208 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C195.889 3.249 193.893 4 192 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C179.889 3.249 177.893 4 176 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C163.889 3.249 161.893 4 160 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C147.889 3.249 145.893 4 144 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C131.889 3.249 129.893 4 128 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C115.889 3.249 113.893 4 112 4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C99.889 3.249 97.893 4 96 4c-1.896.008-3.642-.745-4.975-2.084C90.304 1.106 89.16.64 88.07.64a3.807 3.807 0 0 0-2.846 1.275C83.889 3.249 81.893 4 80 4c-1.896.008-3.642-.745-4.975-2.084C74.304 1.106 73.16.64 72.07.64a3.807 3.807 0 0 0-2.846 1.275C67.889 3.249 65.893 4 64 4c-1.896.008-3.642-.745-4.975-2.084C58.304 1.106 57.16.64 56.07.64a3.807 3.807 0 0 0-2.846 1.275C51.889 3.249 49.893 4 48 4c-1.896.008-3.642-.745-4.975-2.084C42.304 1.106 41.16.64 40.07.64a3.807 3.807 0 0 0-2.846 1.275C35.889 3.249 33.893 4 32 4c-1.896.008-3.642-.745-4.975-2.084C26.304 1.106 25.16.64 24.07.64a3.807 3.807 0 0 0-2.846 1.275C19.889 3.249 17.893 4 16 4c-1.896.008-3.642-.745-4.975-2.084C10.304 1.106 9.16.64 8.07.64a3.807 3.807 0 0 0-2.846 1.275C3.889 3.249 1.893 4 0 4V0h1056v4c-1.896.008-3.642-.745-4.975-2.084-.721-.81-1.865-1.275-2.954-1.275a3.807 3.807 0 0 0-2.846 1.275C1043.889 3.249 1041.893 4 1040 4c-1.896.008-3.642-.745-4.975-2.084z"></path>
            </svg>
        
        </div>



        <!-- text-footer  -->
        <div class="text-footer">

         


            <div class="text-3">

                <p>تماس با ما </p>

                <div class="line-footer"></div>

                <div class="link-footer">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>

                    <a href="#">021-1122</a>

                </div>


                <div class="link-footer">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z"/>
                    </svg>

                    <a href="#">info@iransabz.ir</a>
                  
                   
                   
                </div>

            </div>
        
        </div>
                    <div class="bottom">
                           کلیه حقوق محفوظ می باشد 2023 ©
                    </div>
    </footer>
    <script src="../js/js.js"></script>
    <script src="../js/admin.js"></script>


</div>



</div>

</body>


</html>