<!-- Head is included -->
<?php 
$title="Order";
include('include/head.php'); 
?>
<body>
    

<!-- header is included -->
<?php include('include/header.php')  ?>

<div class="d-flex flex-wrap">

    <!-- sidebar is included -->
    <?php include('include/sidebar.php')  ?>
    
    <div class="main-order-container  mt-5">
        <div class="my-order-head px-4 my-2 border bg-light py-3">
            <span>My Orders</span>
        </div>
        <div class="my-order-body border py-4 mb-3" onclick="location.href='my-order-detail.php'">
            <div class="row">
                <div class="col-6 row">
                    <div class="col-4">
                        <img class="my-order-img mx-2" src="https://cdn.pixabay.com/photo/2021/12/19/10/42/old-6880626__340.jpg" alt="">
                    </div>
                    <div class="product-details col-8">
                        <p class="fs-6 mb-3 text-dark">Watch</p>
                        <p>color: black</p>
                        <p>Seller: RK Store</p>
                    </div>
                </div>
                <div class="col-2 align-middle-start"> <i class="fa-solid fa-indian-rupee-sign"></i> &nbsp; <b> 200.00</b></div>
                <div class="product-details col-4">
                    <p class="fs-6 text-dark mb-3"><i class="fa-solid fa-circle text-success me-2" style="font-size:11px;"></i>Delivered on jan 11, 2022</p>
                    <p>Your item has been delivered</p>
                </div>
                  

            </div>  
        </div>
        
        
    </div>
    

</div>
    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
