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
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Enquiry List | Peramsons Academy</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-lightest">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $row['1']; ?></a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <div class="flex">

                </div>
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border ">
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
                            <i class="fas fa-table float-left mx-2"></i>
                            Enquiry List
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border  bg-white">
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
                
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">
                <div class="flex flex-col">
                    <!--Grid Form-->
                    <form class="w-full" action="after_search.php?id=<?php echo $row['0']; ?>" method="POST">
                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    Search Enquiry
                                </div>
                                
                                <div class="p-3">
                                
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                Enter Your Search
                                            </label>
                                            <input name="txtsearch" class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-city" type="text" placeholder="type here.....">
                                        </div>

                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1"
                                                   for="grid-state">
                                                details
                                            </label>
                                            <div class="relative">
                                                <select name="cbosearch" class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                        id="grid-state">
                                                    <option>Name</option>
                                                    <option>Phoneno</option>
                                                    <option>Gender</option>
                                                    <option>Course</option>
                                                    <option>Faculty</option>
                                                    

                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 20 20">
                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                             <div class="mt-4">
                                                <button class="px-4 px-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="submit">Search</button>
                                            </div>
                                        </div>
                                        
                                    </div>

                                   

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->

                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    Enquiry List
                                </div>
                                <div class="p-3">
                                    <table class="table-responsive w-full rounded">
                                        
                                            <tr>
                                                <th class="border w-1/4 px-4 py-2">Student Name</th>
                                                <th class="border w-1/6 px-4 py-2">Phone Number</th>
                                                <th class="border w-1/6 px-4 py-2">Gender</th>
                                                <th class="border w-1/6 px-4 py-2">Course</th>
                                                <th class="border w-1/7 px-4 py-2">Status</th>
                                                <th class="border w-1/7 px-4 py-2">Actions</th>
                                            </tr>

                                            <?php
                                                include('conn.php');
                                                $xy = mysqli_query($connection,"SELECT * FROM `enquiry_list` ");

                                            ?>
                                            <?php
                                                while($row=mysqli_fetch_array($xy))
                                                {
                                            ?>
                                                <tr>
                                                    <td class="border w-1/4 px-4 py-2"><?php echo $row[1]; ?></td>
                                                    <td class="border w-1/4 px-4 py-2"><?php echo $row[3]; ?></td>
                                                    <td class="border w-1/4 px-4 py-2"><?php echo $row[4]; ?></td> 
                                                    <td class="border w-1/4 px-4 py-2"><?php echo $row[6]; ?></td>
                                                    <td class="border w-1/4 px-4 py-2"><?php echo $row[15]; ?></td>
                                                    <td class="border w-1/7 px-4 py-2">
                                            
                                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="edit_enquery_forms.php?id=<?php echo $row['0']; ?>">
                                                    <i class="fas fa-edit"></i></a>
                                                    <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="delete.php?id=<?php echo $row['0']; ?>">
                                                    <i class="fas fa-trash"></i></a></td>
                                                        
                                                </tr>
                                                <?php
                                                }
                                                
                                                ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <!--/Grid Form-->
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