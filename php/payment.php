<?php 
    include_once "header.php"
?>
            
            <div class="bgstudent container-fluid px-4 bodyh">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0 fw-bold">Students List</h4>
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="py-3  m-0 px-4" src="icons/doublearrows.svg" alt="">
                    </div>
                </div>
                <hr class="m-0"/>
                <div class="row bg-transparent" id="titles">
                    <div class="col-sm-3 col-lg-1 m-auto">
                        <p class="m-0">Name</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="text-nowrap m-0">Payment Schedule</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="date">
                        <p class="text-nowrap m-0">Bill Number</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="num">
                        <p class="text-nowrap m-0 text-nowrap">Amount Paid</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" >
                        <p class="text-nowrap m-0 text-nowrap">Balance amount</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="date">
                        <p class="m-0 text-nowrap">Date</p>
                    </div>
                    <div class="col-sm-2 col-lg-1 m-auto">
                    </div>
                </div>
                <?php 
                    for ($i = 0; $i < 4; $i++) {
                        include "paymentrow.php";
                    }
                ?>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php"
?>