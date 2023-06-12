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




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



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
                    
                    <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="tables.php"
                            class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-table float-left mx-2"></i>
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
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-500 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!--Grid Form-->

                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Enquiry List
                            </div>
                            <div id="out_print" class="p-3">
                                <table class="table-responsive w-full rounded" border="1">
                                    <thead>
                                      <tr>
                                        <th class="border w-1/4 px-4 py-2">Student Name</th>
                                        <th class="border w-1/6 px-4 py-2">Phone Number</th>
                                        <th class="border w-1/6 px-4 py-2">Gender</th>
                                        <th class="border w-1/6 px-4 py-2">Course</th>
                                        <th class="border w-1/7 px-4 py-2">Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                include('conn.php');
                                                $select_query = mysqli_query($connection, "SELECT * FROM enquiry_list ");
                                                while($row = mysqli_fetch_array($select_query))
                                                {
                                            ?>
                                            <tr bgcolor="white">
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['1']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['3']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['4']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['6']; ?></td>
                                                <td class="border w-1/4 px-4 py-2"><?php echo $row['15']; ?></td>
                                                <td class="border px-4 py-2">
                                                
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white" href="edit_enquery_forms.php?id=<?php echo $row['0']; ?>">
                                                        <i class="fas fa-edit"></i></a>
                                                <a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="delete.php?id=<?php echo $row['0']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </tr>
                                            <?php 
                                                } 
                                            ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                    <div>
                    <button class="btn btn-sm btn-flat btn-success" id="btnPrint" onclick="printfun();" type="button"><i class="fa fa-print"></i> Print</button>
                    </div>

                    <script type="text/javascript">
                        
                        function printfun(){

                            //alert("s");
                            var divContents = $("#out_print").html();
                            var printWindow = window.open('', '', 'height=400,width=800');
                            printWindow.document.write('<html><head><title>PERAMSONS ACADEMY</title>');
                            printWindow.document.write('</head><body>');
                            printWindow.document.write('<div align="right">cell no : 9703971577 ');
                            printWindow.document.write('<div align="left">Peram Rajashekar Reddy</div>');
                            printWindow.document.write('<div align="left">CEO FOUNDER</div>');
                            printWindow.document.write('</div>');
                            printWindow.document.write('<div align="center"><b><h2 style="color: violet;">PERAMSONS ACADEMY</h2></b>');
                            printWindow.document.write('<h4>#408, Annapura Block,Adithya Enclave,Ameerpet,Telangana</h4>');
                            printWindow.document.write(divContents);
                            printWindow.document.write('<footer class="bg-grey-darkest text-white p-2"><div class="flex flex-1 mx-auto">&copy; Peramsons Academy @ 2022</div></footer>');
                            printWindow.document.write('</body></html>');
                            printWindow.document.close();
                            printWindow.print();
                               


                        }

                    </script>

                    <script>
                        $(function(){
                            $('#print').click(function(e){
                                alert('s');
                                e.preventDefault();
                                start_loader();
                                var _h = $('head').clone()
                                var _p = $('#out_print').clone()
                                var _el = $('<div>')
                                    _p.find('thead th').attr('style','color:black !important')
                                    _el.append(_h)
                                    _el.append(_p)
                                    
                                var nw = window.open("","","width=1200,height=950")
                                    nw.document.write(_el.html())
                                    nw.document.close()
                                    setTimeout(() => {
                                        nw.print()
                                        setTimeout(() => {
                                            end_loader();
                                            nw.close()
                                        }, 300);
                                    }, 200);
                            })
                        })
                    </script>

                    
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
<div>
</body>

</html>