<!-- Head is included -->
<?php 
$title="Dashboard";
include('include/head.php'); 
?>
<body>
    

<!-- header is included -->
<?php include('include/header.php')  ?>

<div class="d-flex flex-wrap">

    <!-- sidebar is included -->
    <?php include('include/sidebar.php')  ?>
    
    <div class="main ms-0 ms-lg-auto mt-5">
        <div class="main-head px-4  py-3 mx-auto">
            <h5>Account Information</h5>
            <a href="my-profile.php">Edit</a>
        </div>
        <div class="main-body py-4 mx-auto">
            <ul>

                <li>
                    <i class="fa-regular fa-circle-user me-1"></i>
                    <a> xyz</a> 
                    <a>abc</a>
                </li>

                <li>
                    <b>Male</b>
                </li>

                <li>
                    <i class="fa-regular fa-envelope me-1"></i>
                    <a>user@mail.com</a>
                </li>

                <li>
                    <i class="fa-solid fa-unlock me-1"></i>
                    <a>Password</a>
                </li>
                <li>
                    <i class="fa-solid fa-mobile-screen-button me-1"></i>
                   <b>7265464987</b> 
                </li>
                <li>
                    <i class="fa-solid fa-calendar me-1"></i>
                    <a>dd/mm/yyyy</a>
                </li>

            </ul>

        </div>
        

    </div>
    

</div>
    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
