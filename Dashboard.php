<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- DIFM LAW LOGO  -->
    <!-- <link rel="icon" href="Images/Vector.png"> -->


    <!-- External CSS File  -->
    <link rel="stylesheet" href="CSS/Comman-Color-Border.css">
    <link rel="stylesheet" href="CSS/Dashboard.css">
    <!-- Bootstrap CSS file  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font Link  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body class='font-roboto'>
    <!-- Navbar -->
    <nav class="sticky-top navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5 my-2">
            <a class="navbar-brand" href="#"><img src="Images/Vector.png" alt=""></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fs-3"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="m-0">
                        <a class="nav-link active fs-4 fw-bold me-md-5 textcolor" aria-current="page" href="#">DIFM LAW</a>
                    </li>
                    <li class="m-0">
                        <a class="nav-link fs-5 fw-bold active me-md-5 textcolor" href="index.html" aria-current="page">Home</a>
                    </li>
                    <li class="m-0 dropdown">
                        <a class="nav-link fs-5 fw-bold active me-md-5 textcolor" href="About_Us.html" aria-expanded="false">
                            About Us
                        </a>
                    </li>
                    <li class="m-0">
                        <a class="nav-link fs-5 fw-bold active me-md-5 textcolor" href="Contact-Us.html" tabindex="-1"
                            aria-disabled="true">Contact Us</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <img src="Images/Ellipse 106.png" class="rounded-circle  imgborder" alt="...">
                    <button class="btn btn-secondary dropdown-toggle margin-over fw-bold px-4" id="nameborder" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Junaid Khan
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="Dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modals of Table Data-->
    <!-- Data -->
    <?php
                $conn = new mysqli("localhost",'root',"",'crud_operation');
                // $User="";
                // $avail="";
                // $Date="";
                // $Expert="";
                $sql = "SELECT * FROM lawyer_discription";
                $result = $conn->query($sql);
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        $ID = $row['Customer_ID'];
                        $User=$row['User_Name'];
                        $Avail = $row['Availablity'];
                        $Date= $row['Date'];
                        $Expert = $row['Expertise_In'];
                        echo "
                        <div class='d-none hidden vh-100 w-100 bg-color-thead Data' id='Data_$ID' onclick='Cancel()'>
                            <div class='position-absolute top-50 start-50 translate-middle w-75'>
                                <form method='post' action='php/Update_Data.php?id=$ID' id='Update_$ID' onclick='Login_Page_onclick(event)'
                                    class='bg-color-white border rounded-500'>
                                    <fieldset class='table w-75 mx-auto py-4' id='Table_$ID'>
                                        <div class='row'>
                                            <div class='col-4'>
                                                <label class='fw-500'>User Name : </label>
                                            </div>
                                            <div class='col-6'>
                                                <input type='text' value='$User' class='border border-0 bg-color-white ps-5 w-75' name='User' readonly>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-4'>
                                                <label class='fw-500'>Availabilty : </label>
                                            </div>
                                            <div class='col-6'>
                                                <input type='text' value='$Avail' class='border border-0 bg-color-white ps-5 w-75' name='Avai' readonly>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-4'>
                                                <label class='fw-500'>Date : </label>
                                            </div>
                                            <div class='col-6'>
                                                <input type='text' value='$Date' class='border border-0 bg-color-white ps-5 w-75' name='Date' readonly>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-4'>
                                                <label class='fw-500'>Expertise In : </label>
                                            </div>
                                            <div class='col-6'>
                                                <input type='text' value='$Expert' class='border border-0 bg-color-white ps-5 w-75' readonly
                                                    name='Exper'>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        ";    
                    }
                }
                else{
                    echo "No Data";
                }
                ?>

    <!-- To add Data to table  -->
    <div class="d-none hidden vh-100 w-100 bg-color-thead Data" id="Data_8" onclick="Cancel()">
        <div class="position-absolute top-50 start-50 translate-middle w-75">
            <fieldset>
                <form method="post" action="php/Post_data.php" class="w-50 mx-auto p-5 fieldset-color"
                    onclick="Login_Page_onclick(event)">
                    <label for="User_Name">User Name</label>
                    <input type="text" class="form-control" required name="User_Name">
                    <label for="Availabilty">Availabilty</label>
                    <input type="text" class="form-control" required name="Avail">
                    <label for="Expertise_In">Expertise In</label>
                    <input type="text" class="form-control" required name="Expert">
                    <input type="submit" name="submit" value="Add"
                        class="w-25 bg-color-lightblue text-color-white my-5 mx-auto form-control">
                </form>

            </fieldset>
        </div>
    </div>
    <!-- Middle Container  -->
    <div class="container-fluid">
        <!-- Table Data  -->
        <div class="w-75 mx-auto">
        
            <form method='' action='' class='mt-5 mb-2' id='Searching'>
                <input type='Search' placeholder='Search using Filter' class='Search form-control d-inline w-50 my-2 border-2 py-2' name='Search' id='Search' onkeyup='SearchF(value)' required>
                <select class="mx-3 px-4 py-2 border-3 rounded-3 fw-500 bg-color-thead text-black" id='Selected' >
                    <option value="User Name">Name</option>
                    <option value="Lawyer Time">Lawyer Time</option>
                    <option value="Request Date">Date</option>
                    <option value="Expertise_In">Expertise_In</option>
                </select>
                <p class='text-danger d-none valid'>No Record found</p>
            </form>   
            <table class='table table-hover table-borderless' id='Table1'>

                <!-- Table Header  -->
                <thead>
                    <tr>
                        <th class='bg-color-thead fs-6'>User Name</th>
                        <th class='bg-color-thead fs-6'>Lawyer Time</th>
                        <th class='bg-color-thead fs-6'>Request Date</th>
                        <th class='bg-color-thead fs-6'>Expertise In</th>
                        <th class='bg-color-thead fs-6'>Action</th>
                    </tr>
                </thead>
                <?php
                // include('php/Search_Data.php');
                include("php/Get_Data.php");
                ?>
            </table>
            <!-- <div class="w-25 bg-color-lightblue text-color-white my-5 mx-auto form-control" onclick="View('Data_8')" >Add Lawyers</div> -->
            <input type="button" onclick="View(Data_8)" value="Add Lawyers"
                class="w-25 bg-color-lightblue text-color-white my-5 mx-auto form-control">

        </div>

        <!-- </div> -->
        <!-- Footer -->
    <div class="container-fluid mt-5 px-0 bg-color-darkwhite">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center flex-nowrap py-5">
            <div class="my-4 mx-3 px-4">
                <h2 class="py-3">DIFM LAW</h2>
                <div>
                    <p class="text-break text-justify pb-3">
                        We are a leading lawyer listing portal, dedicated to simplifying the process of connecting
                        lawyers and clients.
                    </p>
                </div>
                <div class="d-flex justify-content-between w-50">
                    <img src="Images/image 32.png" alt="" class="img-fluid">
                    <img src="Images/image 31.png" alt="" class="img-fluid">
                    <img src="Images/image 33.png" alt="" class="img-fluid">
                    <img src="Images/image 34.png" alt="" class="img-fluid">
                </div>
            </div>

            <!-- Display for large and Xl Display -->

            <div class="my-4 mx-3 d-none d-lg-block ">
                <ul class="list-unstyled">
                    <li class="fs-2em fw-600 my-2">Quick Links</li>
                    <li class="fs-1em fw-400 my-2"><a href="Contact-Us.html" class="text-decoration-none textcolor">Contact</a></li>
                    <li class="fs-1em fw-400 my-2"><a href="About_Us.html" class="text-decoration-none textcolor">About</a></li>
                    <li class="fs-1em fw-400 my-2">Lawyers</li>
                </ul>
            </div>
    
            <!-- Display for large and Xl Display -->
    
            <div class="my-4 mx-3 d-none d-lg-block px-4">
                <ul class="list-unstyled">
                    <li class="fs-2em fw-600 my-2">DIFM Group</li>
                    <li class="fs-1em fw-400 my-2"><a href="https://difm.llc/" class="text-decoration-none textcolor">Difm.llc</a></li>
                    <li class="fs-1em fw-400 my-2"><a href="https://www.worldmodelhunt.com/" class="text-decoration-none textcolor">Worldmodelhunt.com</a></li>
                    <li class="fs-1em fw-400 my-2"><a href="https://bragsocial.com/" class="text-decoration-none textcolor">BragSocial.com</a></li>
                </ul>
            </div>
    
            <!-- Display for medium and small Display -->
    
            <div class="d-flex mx-3 justify-content-between d-lg-none d-xl-none d-xxl-none">
                <div class="my-4 mx-3">
                    <ul class="list-unstyled">
                        <li class="fs-2em fw-600">Quick Links</li>
                        <li class="fs-1em fw-400"><a href="Contact-Us.html" class="text-decoration-none textcolor">Contact</a></li>
                        <li class="fs-1em fw-400"><a href="About_Us.html" class="text-decoration-none textcolor">About</a></li>
                        <li class="fs-1em fw-400">Lawyers</li>
                    </ul>
                </div>
                <div class="my-4 mx-3">
                    <ul class="list-unstyled">
                        <li class="fs-2em fw-600">DIFM Group</li>
                        <li class="fs-1em fw-400"><a href="https://difm.llc/" class="text-decoration-none textcolor">Difm.llc</a></li>
                        <li class="fs-1em fw-400"><a href="https://www.worldmodelhunt.com/" class="text-decoration-none textcolor">Worldmodelhunt.com</a></li>
                        <li class="fs-1em fw-400"><a href="https://bragsocial.com/" class="text-decoration-none textcolor">BragSocial.com</a></li>
                    </ul>
                </div>
    
            </div>

            <div class="my-4 mx-3 px-4">
                <div class="input-group">
                    <input type="email" class="form-control Subscribe-Border rounded-500"
                        placeholder="Enter Your Email" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <span
                        class="input-group-text bg-color-lightblue text-color-white Subscribe-Border z-index-12 margin-over-footer fw-600 Subscribe-Left-Round px-lg-1"
                        id="">Subscribe</span>
                </div>
            </div>
        </div>
    </div>

        <!-- Bootstrap JS file  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JS File  -->
        <script src="js/Dashboard.js"></script>
</body>

</html>