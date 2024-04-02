<?php
    require_once('D:\xampp\htdocs\TP-codes\config.php');


    $query = "Select * from registration";
    $result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>TP: Tenement Portal - Wallet Page</title>
     
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/apexcharts.css" rel="stylesheet">

        <link href="css/TP-Tenement Portal.css" rel="stylesheet">

    </head>
    
    <body>
        <header class="navbar sticky-top flex-md-nowrap">
            <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
                <a class="navbar-brand" href="">
                    <i class="bi-box"></i>
                    TP: Tenement Portal
                </a>
            </div>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="navbar-nav me-lg-2">
                <div class="nav-item text-nowrap d-flex align-items-center">
                    <div class="dropdown ps-3">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-bell"></i>
                            <span class="position-absolute start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </a>

                        <ul class="dropdown-menu notifications-block-wrap bg-white shadow">
                            <small>Notifications</small>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-success">
                                        <i class="notifications-icon bi-check-circle-fill"></i>
                                    </div>

                                    <div>
                                        <span>Your account has been created successfuly.</span>

                                        <p>12 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-info">
                                        <i class="notifications-icon bi-folder"></i>
                                    </div>

                                    <div>
                                        <span>Please check. We have sent a Daily report.</span>

                                        <p>10 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-danger">
                                        <i class="notifications-icon bi-question-circle"></i>
                                    </div>

                                    <div>
                                        <span>Account verification failed.</span>

                                        <p>1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown ps-1">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-social bg-white shadow">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/search.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Google</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/spotify.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Spotify</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/telegram.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Telegram</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/snapchat.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Snapchat</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/tiktok.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Tiktok</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="image/social/youtube.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Youtube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="image/user.png" class="profile-image img-fluid" alt="">
                        </a>
                        <ul class="dropdown-menu bg-white shadow">
                            <li>
                                <div class="dropdown-menu-profile-thumb d-flex">
                                    <img src="image/user.png" class="profile-image img-fluid me-3" alt="">

                                    <div class="d-flex flex-column">
                                        <small>Dustin</small>
                                        <a href="#">dustinbingot@gmail.com</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="bi-question-circle me-2"></i>
                                    Help
                                </a>
                            </li>

                            <li class="border-top mt-3 pt-2 mx-4">
                                <a class="dropdown-item ms-0 me-0" href="login.php">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="userindex.html">
                                    <i class="bi-house-fill me-2"></i>
                                    Overview
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="wallet.html">
                                    <i class="bi-wallet me-2"></i>
                                    My Bills
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="profile.html">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="setting.html">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="help-center.html">
                                    <i class="bi-question-circle me-2"></i>
                                    Help Center
                                </a>
                            </li>

                            
                            <li class="nav-item border-top mt-auto pt-2">
                                <a class="nav-link" href="login.php">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">Billing History</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-12 col-12">
                            <div class="custom-block bg-white">
                                <h5 class="mb-4">Account Users</h5>

                                <div class="table-responsive">
                                    <table class="account-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col">First Name</th>

                                                <th scope="col">Last Name</th>

                                                <th scope="col">Email</th>

                                                <th scope="col">Phone</th>

                                                <th scope="col">Address</th>

                                                <th scope="col">Username</th>

                                                <th scope="col">Unit</th>
                                                <th scope="col">Update</th>
                                                <th scope="col">Delete</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            <tr>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)){

                                                ?>
                                                <td><?php echo $row['FN']?></td>
                                                <td><?php echo $row['LN']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['PN']?></td>
                                                <td><?php echo $row['Address']?></td>
                                                <td><?php echo $row['username']?></td>
                                                <td><?php echo $row['UnitNo']?></td>
                                                <td scope="row">Update</td>
                                                <td scope="row">Delete</td>
                                            </tr>
                                                <?php
                                                }
                                                
                                                ?>
                                            
                                            </tr>

                                            
                                        </tbody>
                                    </table>
                                </div>

                                <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>

                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="custom-block custom-block-balance">
                                <small>Your Balance</small>

                                <h2 class="mt-2 mb-3">₱41,000.00</h2>

                                <div class="custom-block-numbers d-flex align-items-center">
                                    <span>****</span>
                                    <span>****</span>
                                    <span>****</span>
                                    <p>2560</p>
                                </div>

                                <div class="d-flex">
                                    <div>
                                        <small>Valid Date</small>
                                        <p>12/2028</p>
                                    </div>

                                    <div class="ms-auto">
                                        <small>Card Holder</small>
                                        <p>Dustin</p>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-bottom d-flex flex-wrap">
                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-wallet"></i>

                                        <small></small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-upc-scan"></i>

                                        <small>Scan & Pay</small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-send"></i>

                                        <small>Send</small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-arrow-down"></i>

                                        <small>Request</small>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-transations">
                                <h5 class="mb-4">Recent Transations</h5>

                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="image/profile/senior-man-white-sweater-eyeglasses.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p>
                                                <a href="transation-detail.html">Michael</a>
                                            </p>

                                            <small class="text-muted">President</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>03/15/2024</small>
                                        <strong class="d-block text-danger"><span class="me-1">+</span> ₱2,500</strong>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="image/profile/young-beautiful-woman-pink-warm-sweater.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p>
                                                <a href="transation-detail.html">Cherry</a>
                                            </p>

                                            <small class="text-muted">Secretary</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>02/15/2023</small>
                                        <strong class="d-block text-success"><span class="me-1">+</span> ₱5,000</strong>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="image/profile/young-woman-with-round-glasses-yellow-sweater.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p><a href="transation-detail.html">Michaella</a></p>

                                            <small class="text-muted">Vice-President</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>01/15/2023</small>
                                        <strong class="d-block text-success"><span class="me-1">+</span> ₱2,500</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>

            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/apexcharts.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>