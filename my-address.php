<!-- Head is included -->
<?php 
$title="My Address";
include('include/head.php'); 
?>
<body >
    

<!-- header is included -->
<?php include('include/header.php')  ?>

<div class="d-flex flex-wrap" style="max-width: 1500px;">

    <!-- sidebar is included -->
    <?php include('include/sidebar.php')  ?>
    
    <div class="main ms-0 ms-lg-auto mt-5">
        <div class="main-head px-4  py-3 mx-auto">
            <h5>My Address</h5>
        </div>
        <div class="main-body px-4 py-4 mx-auto">
            <div class="px-3 border py-3 mx-auto fw-bold text-primary show add-address">
                <a>
                    <i class="fa-solid fa-plus me-2"></i>
                    ADD A NEW ADDRESS
                </a>
            </div>
            <div class="px-3 new-address border" >
                <div class="py-3 mx-auto fw-bold text-primary">ADD A NEW ADDRESS</div>
                <form class="row">
                  <div class="mb-2 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="Name" />
                  </div>
                  <div class="mb-2 col-md-5 col-12">
                    <input type="number" class="form-control" placeholder="10-Digit Mobile Number"/>
                  </div>
                  <div class="mb-2 col-md-5 col-12">
                    <input type="number" class="form-control" placeholder="Pincode" />
                  </div>
                  <div class="mb-2 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="Locality" />
                  </div>
                  <div class="mb-2 col-10">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Address (Area and Street)"
                    />
                  </div>
                  <div class="mb-2 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="City" />
                  </div>
              
                  <div class="mb-2 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="State" />
                  </div>
                  <div class="mb-2 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="Landmark (optional)"/>
                  </div>
                  <div class="mb-3 col-md-5 col-12">
                    <input type="text" class="form-control" placeholder="Alternate Phone (optional)"/>
                  </div>
                  <div class="mb-4 col-12">
                    <label class="form-label d-block">Address Type </label>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"/>
                      <label class="form-check-label" for="inlineRadio1">Home</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"/>
                      <label class="form-check-label" for="inlineRadio2">Office</label>
                    </div>
                  </div>
                  <a class="btn btn-primary permission text-white mb-3 fw-900" style="width: 150px; height: 40px">SAVE</a>
                  <a class="btn text-primary permission fw-bolder mb-3" style="width: 150px; height: 40px">Cancel</a>
                </form>
              </div>
                  
            <div class="row  py-3 mx-auto">
                <div class="col-12 border">
                    <div class="d-flex justify-content-between">
                        <div style="width: 90%;">
                            <div class="text-secondary mt-4 px-2" style="width: 55px; background-color:rgba(206, 204, 204, 0.452); font-size:smaller">HOME</div>
                            <div class="addres-name fw-bold d-inline-block" style="font-size:14px;">Sam</div>
                            <div class="address-mobile mx-3 fw-bold d-inline-block mt-1" style="font-size:14px;">7357754354</div>
                            <div class="my-3" style="width: 65%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere distinctio earum!</div>
                        </div>
                        <div class="hover-edit">
                            <i class="fa-solid fa-ellipsis-vertical d-inline"></i>
                            <div class="edit-address-popup bg-light shadow">
                                <a href="edit-address.php">Edit</a>
                                <a href="javascript:void(0)" onclick="confirm('are you sure want to delete')">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 border">
                    <div class="d-flex justify-content-between">
                        <div style="width: 90%;">
                            <div class="text-secondary mt-4 px-2" style="width: 55px; background-color:rgba(206, 204, 204, 0.452); font-size:smaller">HOME</div>
                            <div class="addres-name fw-bold d-inline-block" style="font-size:14px;">Sam</div>
                            <div class="address-mobile mx-3 fw-bold d-inline-block mt-1" style="font-size:14px;">7357754354</div>
                            <div class="my-3" style="width: 65%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus facere distinctio earum!</div>
                        </div>
                        <div class="hover-edit">
                            <i class="fa-solid fa-ellipsis-vertical d-inline"></i>
                            <div class="edit-address-popup bg-light shadow">
                                <a href="edit-address.php">Edit</a>
                                <a href="javascript:void(0)" onclick="confirm('are you sure want to delete')">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>

        </div>
        
    </div>
                

</div>


    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
