<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Tanninfo - Wine Picks</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logoMain.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>




    <head>
       
    <script>
        <?php include("#.php"); ?>
    </script>

    </head>

<body>
<!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="assets/img/logoMain.png" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="index.html">Home</a> </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Wines</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>  <!-- Old:   news.html -->
                                    </ul>
                                </li>
                                <li><a href="news.html">What's Trending</a> <!-- Old:   news.html -->
                                    <ul class="sub-menu">
                                        <li><a href="news.html"> Cities </a></li> <!-- Old:   news.html -->
                                        <li><a href="single-news.html">Neighborhood</a></li> <!-- Old:   single-news.html -->
                                    </ul>
                                </li>
                                <li><a href="contact.html">Interactive Map</a></li> <!-- Old:   contact.html -->
                                <li><a href="shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="log-in.html" class="bordered-btn"> Log In </a> 
                                </li>
                                <li>

                                    <div class="register">

                                    <a href="signUp.php" class="boxed-btn"> Sign Up </a>
                                    </div>
                                </li>                   
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    


    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get Exclusive Access</p>
                        <h1>Becoming a Member</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->




<section class="h-100 bg-light">
<form action="signUp.php" method="POST">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">

            <div class="col-xl-6 d-none d-xl-block">
              <img src="assets/img/signUpImg.jpg"

                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5">Sign Up!</h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="Fname">First name</label>
                      <input type="text" name="Fname" class="form-control form-control-lg" />
                      
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="Lname">Last name</label>
                      <input type="text" name="Lname" class="form-control form-control-lg" />
                      
                    </div>
                  </div>
                </div>
                <!-- Phone -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control form-control-lg" />
                  
                </div>

      
                <div class="form-outline mb-4">
                    <label class="form-label" for="username">Email/Username</label>
                    <input type="text" name="username" class="form-control form-control-lg" />
                    <div id="emailHelp" class="form-text"> Email will also be your USERNAME.</div>
                </div>

                <!-- PASSWORD -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="text" name="password" class="form-control form-control-lg" />

                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-success btn-lg ms-2">Register!</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
    </body>
    

    <?php
        
        define('DB_HOST', 'localhost');
        define('DB_USER', 'htran67');
        define('DB_PASSWORD', 'htran67');
        define('DB_NAME', 'htran67');
    
    function DeleteEntry($id) {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //Check connection
        if (!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        $del = "DELETE FROM agentUser WHERE id = '$id' ";
        $result = $conn->query($del);
        mysqli_close($conn);
    }

    if($_GET['cmd'] == 'delete') {
        $id = $_GET['id'];
        DeleteEntry($id);
    }


    function InsertInfo() {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //Check connection
        if($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO agentUser(Fname, Lname, phone, username, password) VALUES(?,?,?,?,?)");
            //watch out for sss used for data type of VARCHAR
            $stmt->bind_param("sssss", $Fname, $Lname, $phone, $username, $password);
            $stmt->execute();
            echo "registration SUCCESSFULLY <br>";
            $stmt->close();
            $conn->close();
        }

    }

    InsertInfo();
        

    function ShowRegister() {
        //Create connection
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //Check connection
        if (!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        $sql = "SELECT * FROM agentUser";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
                //output data of each row to webpage
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - First Name: ".$row["Fname"]. " - Last Name: ".$row["Lname"] . " - Phone: ".$row["phone"]. "<br>";
                    
                }
            } else {
                echo "0 results";
        }
        mysqli_close($conn);

    }
    
    ShowRegister();   



    ?>





</html>