<!-- Head is included -->
<?php 
$title="Order Details";
include('include/head.php'); 
?>

<body>


    <!-- header is included -->
    <?php include('include/header.php')  ?>

    <div class="row">

        <div class="row col-11 my-3 border mx-auto">
            <div class=" col-6 fs-4 fw-bold p-3">Review & Rating</div>
            <div class="col-6 row my-auto">  
                <div class="col-8end my-auto ms-auto">
                    <p class="m-0">Watch</p>
                    <p class="m-0"><span class="rating-box bg-success text-white ps-2 px-1 rounded"> 4<i class="fa-solid fa-star mx-1"></i></span></p>
                </div>
                <div class="col-4 my-2 edit-review-img-div">
                    <img class="edit-review-img mx-2" src="https://cdn.pixabay.com/photo/2021/12/19/10/42/old-6880626__340.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="rating-div col-11 px-0 border mx-auto">
            <div class="container-fluid border-bottom">
                <p class="fs-5 fw-bold">Rate this product</p>
                <div class="rating_star">
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    <button class="star">&#9734;</button>
                    
                </div>
            </div>
            <div class="container-fluid">
                <p class="fs-5 fw-bold">Review this product</p>
                <div class="review-description">
                    <p class="my-3 mx-4">Description</p>
                    <textarea class="review-textarea px-4" placeholder="Description"></textarea>
                </div>
                <div class="review-description-2">
                    <p class="my-1 mx-4">Title (Optional)</p>
                    <textarea class="review-textarea px-4" placeholder="Review Title"></textarea>
                </div>
                <div>
                    <input class="my-4" type="file" accept="image/*" multiple>
                </div>
                <p class="text-end"><a class="btn review-btn px-5 py-2">Submit</a></p>
            </div>
        </div>


    </div>


    </div>

    <!-- footer is included -->
    <?php include('include/footer.php')  ?>

    <!-- foot is included -->
    <?php include('include/foot.php')  ?>