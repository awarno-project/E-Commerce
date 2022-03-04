<!-- Head is included -->
<?php 
$title="My Review";
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
            <h5>My Reviews</h5>
        </div>
        <div class="main-body py-4 mx-auto">
            <div class="row">
                <div class="col-2">
                <img class="my-order-img mx-2" src="https://cdn.pixabay.com/photo/2021/12/19/10/42/old-6880626__340.jpg" alt="">
                </div>
                <div class="col-10 product-details">
                    <p class="my-2 fs-6">Watch</p>
                    <p><span class="bg-success text-white ps-2 px-1 rounded"> 4<i class="fa-solid fa-star mx-1"></i></span></p>
                    <p class="text-dark fs-6">good watch</p>
                    <p>Sam <i class="fa-solid fa-circle-check"></i> Certified Buyer <Span>jan 11, 2022</Span></p>
                    <p>
                        <a href="" class="mx-3 my-2">Edit</a>
                        <a href="" class="mx-3 my-2" onclick="confirm('are you sure want to delete')">Delete</a>
                        <a href="#" class="mx-3 my-2 share">Share
                        <div class="share-box fs-5 border shadow">
                            <i class="mx-2 fa-brands fa-facebook"></i>
                            <i class="mx-2 fa-brands fa-twitter"></i>
                            <i class="mx-2 fa-brands fa-instagram"></i>
                        </div>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
    </div>
    

</div>
    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
