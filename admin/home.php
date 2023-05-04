<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
</div>

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-primary rounded text-white">
                <h5 class="card-title text-white">Total Cources Listed</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM course");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
        <div class="card info-card sales-card">
            <div class="card-body bg-secondary rounded text-white">
                <h5 class="card-title text-white">Today Students</h5>

                <div class="d-flex align-items-center">
                <div class="ps-3">
                    <h6>
                        <?php
                        $result = $conn->query("SELECT id FROM student");
                        echo($result->num_rows);
                        ?>
                    </h6>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require("./layout/Footer.php"); ?>