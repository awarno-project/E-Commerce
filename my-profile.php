<!-- Head is included -->
<?php 
$title="My Profile";
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
            <h5>My Profile</h5>
        </div>
        <div class="main-body py-4 mx-auto">
            <div class="px-4  py-3 mx-auto">
                <h5>New Profile</h5>
                <div style="height: 2px; width: 50px; background-color:brown; display:inline-block;"></div>
                <div style="height: 2px; width: calc(100% - 55px); background-color:gray; display:inline-block;"></div>
            </div>

            <div class="px-4  py-3 mx-auto">
                <form>
                    <div class="mb-3 form-field d-inline-block">
                        <label  class="form-label">First Name <span class="text-danger fw-bolder">*</span></label>
                        <input type="text" class="form-control" style="width: 95%;">
                    </div>
                    <div class="mb-3 form-field d-inline-block">
                        <label  class="form-label">Last Name <span class="text-danger fw-bolder">*</span></label>
                        <input type="text" class="form-control" style="width: 95%;">
                    </div>
                    <div class="mb-4" style="width: 400px;">
                        <label  class="form-label">E-mail <span class="text-danger fw-bolder">*</span></label>
                        <input type="e-mail" class="form-control" style="width: 99%;">
                    </div>
                    <div class="form-field">
                        <label  class="form-label">Password <span class="text-danger fw-bolder">*</span></label>
                        <input type="Password" class="form-control" style="width: 95%;">
                    </div>
                    <div class="mb-3 form-field">
                        <p class="change-password" style="color:blue;">Change Password</p>
                    </div>
                    <div class="mb-3 form-field">
                        <label  class="form-label">Phone <span class="text-danger fw-bolder">*</span></label>
                        <input type="number" class="form-control" style="width: 95%;">
                    </div>
                    <div class="mb-4 form-field">
                        <label  class="form-label">Date of Birth<span class="text-danger fw-bolder">*</span></label>
                        <input type="date" class="form-control" style="width: 95%;">
                    </div>
                    <div>
                        <label  class="form-label mb-0">Gender<span class="text-danger fw-bolder">*</span></label>
                    </div>
                    <div class="mb-4 form-field">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                          </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">I want to receive order updates on Whatsapp</label>
                      </div>
                    <button type="submit" class="btn text-white fw-bolder py-2 px-4" style="background-color: rgb(190, 63, 12);">SAVE CHANGES</button>
                  </form>
            </div>

        </div>
        
    </div>
    

</div>
    
<!-- footer is included -->
<?php include('include/footer.php')  ?>

<!-- foot is included -->
<?php include('include/foot.php')  ?>
