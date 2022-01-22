<?php 
    include_once "header.php"
?>

            <div class="bgstudent container-fluid px-4 bodyh">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0 fw-bold">Students List</h4>
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="m-0 px-4" src="icons/doublearrows.svg" alt="">
                        <button class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps" type="submit">ADD NEW STUDENT</button>
                    </div>
                </div>
                <hr class="m-0"/>
                <div class="row bg-transparent" id="titles">
                    <div class="col-sm-2 col-lg-1 m-auto">
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Name</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Email</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Phone</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="num">
                        <p class="m-0 text-nowrap">Enroll Number</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="date">
                        <p class="m-0 text-nowrap">Date of admission</p>
                    </div>
                    <div class="col-sm-1 col-lg-1 m-auto">
                    </div>
                </div>
                <?php 
                    for ($i = 0; $i < 6; $i++) {
                        include "studentrow.php";
                    }
                ?>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php"
?>