<!-- Head is included -->
<?php 
$title="My";
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
            <h5>Wishlist</h5>
        </div>
        <table class="main-body py-4 mx-auto table wish-table">
                <thead>
                    <tr>
                        <th scope="col">IMAGE</th>
                        <th scope="col">PRODUCT NAME</th>
                        <th scope="col">PRICE</th>
                        <th scope="col" class="text-center">AVAILABILITY</th>
                        <th scope="col" class="text-center">ACTION</th>
                    </tr>
                 </thead>
                <tbody>
                    <tr>
                        <td><img class="my-order-img" src="https://cdn.pixabay.com/photo/2021/12/19/10/42/old-6880626__340.jpg" alt="img"></td>				
                        <td>Watch</td>
                        <td>2000.00</td>
                        <td><p class="availability mx-auto bg-info px-4 my-0 py-1 rounded-pill">In Stock</p></td>
                        <td class="text-center"><i onclick="confirm('are you sure want to delete')" class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                </tbody>
            </table>
        
    </div>
    

</div>
    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
