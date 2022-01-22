<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>E-Learning Application</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-yellow" id="sidebar-wrapper">
            <div class="sidebar-heading text-left py-1 primary-text fs-4 fw-bold">
                <h1 style="line-height: 20px;" class="b-left2 px-2 fs-5 fw-bold my-3" >E-classe</h1>
            </div>
            <div class="text-center">
                <img class="mt-4 w-50 rounded-full" src="visuals/profil.png" alt="profil image">
                <h6 class="mt-3 fw-bold">Admin name</h6>
                <p class="ps mt-1 text-info">Admin</p>
            </div>
            <div class="text-left list-group list-group-flush my-3">
                <a href="index.php" class="px-4 py-1 list-group-item-action bg-transparent second-text active"><button class="w-100 standard btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft pb-1" src="icons/Home.svg" alt="">&nbsp;&nbsp;Home</button></a>
                <a href="#" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft px-1 pb-1" src="icons/Course.svg" alt="">&nbsp;&nbsp;Course</button></a>
                <a href="students.php" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft pb-1" src="icons/students.svg" alt="">&nbsp;&nbsp;Students</button></a>
                <a href="payment.php" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft px-1 pb-1" src="icons/Payment.svg" alt="">&nbsp;Payment</button></a>
                <a href="#" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft px-1 pb-1" src="icons/Report.svg" alt="">&nbsp;&nbsp;Report</button></a>
                <a href="#" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold " type="submit"><img class="mleft px-1 pb-1" src="icons/Settings.svg" alt="">&nbsp;&nbsp;Settings</button></a>
            </div>
            <div class="text-left list-group list-group-flush my-3">
                <a href="#" class="px-4 py-1 list-group-item-action bg-transparent second-text fw-bold"><button class="w-100 btn1 text-black fs-6 fw-bold pleft" type="submit">Logout&nbsp;&nbsp;&nbsp;&nbsp;<img class="pb-1" src="icons/logout.svg" alt=""></button></a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 d-flex justify-content-between">
                    <div class="align-items-center">
                        <img src="icons/arrow.svg" id="menu-toggle" alt="switch">
                    </div>
                    <div class="d-flex search-container">
                        <form action="/action_page.php">
                          <input type="text" placeholder="Search.." name="search">
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <img class="px-2" src="icons/notbell.svg" alt="notification bell">
                    </div>
                </nav>
            </header>
            