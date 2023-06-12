<?php
    include('conn.php');
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Peramsons Academy</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" ></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    
                    <a  class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $row['1']; ?></a>
                    
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="forms.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Enquiry Forms
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="tables.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Enquiry List
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="search_table.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fa fa-search icon-search float-left"></i>
                             Search Here....
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="logout.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-power-off float-left mx-2"></i>
                            Logout
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                   <?php
                                   include("conn.php");
                                   $result=mysqli_query($connection," SELECT COUNT(User_ID) AS TOTAL FROM `enquiry_list` WHERE Date_and_Time=CURRENT_DATE() ");
                                    $data = mysqli_fetch_array($result);
                                    echo "Today ENQUIRIES = ",$data['TOTAL'];
                                    {
                                   ?>

                                   <?php
                                   include("conn.php");
                                   $result=mysqli_query($connection," SELECT COUNT(User_ID) AS TOTAL FROM `enquiry_list` WHERE Date_and_Time<CURRENT_DATE() ");
                                    $data = mysqli_fetch_array($result);
                                    echo "Past ENQUIRIES = ",$data['TOTAL'];
                                    {
                                   ?>  
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                 <?php 
                                    include("conn.php");
                                    $result=mysqli_query($connection,"SELECT  User_Gender,
                                        COUNT(CASE WHEN User_Gender='Male' THEN 1 END) AS Male,
                                        COUNT(CASE WHEN User_Gender='Female'THEN 1 END) AS Female   
                                        FROM `enquiry_list` WHERE User_ID>'0' ");
                                    $data = mysqli_fetch_array($result);
                                    echo "MALE=",$data['Male'];
                                    echo "<br>";
                                    echo  "FEMALE=",$data['Female'];
                                    {
                                                
                                    ?>   
                                </a>
                                
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php
                                   include("conn.php");
                                   $result=mysqli_query($connection," SELECT COUNT(User_ID) AS TOTAL FROM `enquiry_list` WHERE Date_and_Time <=CURRENT_DATE() ");
                                    $data = mysqli_fetch_array($result);
                                    echo "This Month = ",$data['TOTAL'];
                                    {
                                   ?>
                                   <br>
                                   <?php
                                   include("conn.php");
                                   $result=mysqli_query($connection," SELECT COUNT(User_ID) AS TOTAL FROM `enquiry_list` WHERE Date_and_Time >CURRENT_DATE() ");
                                    $data = mysqli_fetch_array($result);
                                    echo "Last Month = ",$data['TOTAL'];
                                    {
                                   ?>

                                     
                                </a>
                                
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php 
                                    include("conn.php");
                                    $result=mysqli_query($connection," SELECT SUM(User_Fee) AS TOTAL FROM `enquiry_list` ");
                                    $data = mysqli_fetch_array($result);
                                    echo "Total Earnings = ",$data['TOTAL'];
                                    
                                    {
                                                
                             ?>   
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->

                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                            <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl">Latest Enquiries</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-grey-darkest">
                                    <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                include('conn.php');
                                                $select_query = mysqli_query($connection, "SELECT * FROM enquiry_list WHERE date(Date_and_Time) = date(now()) ");
                                                while($row = mysqli_fetch_array($select_query))
                                                {
                                            ?>
                                            <tr bgcolor="white">
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['0']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['1']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['3']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['4']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['6']; ?></td>
                                                <td class="border px-4 py-2">
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="">
                                                        <i class="fas fa-eye"></i></a>

                                            </tr>
                                            <?php 
                                                } 
                                            ?>


                                        <?php 
                                            } 
                                        ?>

                                            <?php 
                                                } 
                                            ?>
                                            <?php 
                                                } 
                                            ?>
                                           
                                        <?php 
                                                } 
                                            ?> 

                                            <?php 
                                                } 
                                            ?>
                                            <?php 
                                                } 
                                            ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /Cards Section Ends Here -->

                    
                    
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; Peramsons Academy @ 2022</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="./main.js"></script>
</body>

</html>