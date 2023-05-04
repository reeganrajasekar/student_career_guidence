<?php require("./layout/db.php"); ?>
<?php require("./layout/Header.php"); ?>
<?php require("./layout/Navbar.php"); ?>
<div class="pagetitle" style="color:#2b74e2;display:flex;flex-direction:row;justify-content:space-between">
    <h1>Courses</h1>
    <button type="button" style="color:#fff;background-color:#012970"  class="btn" data-bs-toggle="modal" data-bs-target="#myModal">
        Add Course
    </button>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color:#012970">Add Course</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form onsubmit="document.getElementById('loader').style.display='block'" style="color:#012970" action="/admin/add.php" method="post">
                    <div class="form-floating mb-3 ">
                        <input required type="text" class="form-control"  name="course" placeholder="Product Name">
                        <label>Course Name</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <select name="gro" class="form-control" id="yourUsername" required>
                            <option value="" selected disabled>Select Your +2 Group</option>
                            <option value="Maths Biology">Maths Biology</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Pure Science">Pure Science</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Others">Others</option>
                        </select>
                        <label for="yourUsername">+2 Group<span class="text-danger">*</span> :</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" name="total" class="form-control" placeholder="+2 Total Mark (min)" required>
                        <label>+2 Total Mark (min)</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" name="cut" class="form-control" placeholder="+2 Total Mark (min)" required>
                        <label>Cut-Off Mark (min)</label>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="number" name="ten" class="form-control" placeholder="+2 Total Mark (min)" required>
                        <label>10th Total Mark (min)</label>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary" style="color:#fff;background-color:#012970">Add</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
<?php
    $result = $conn->query("SELECT * FROM course");
    if($result->num_rows > 0){
        $i=0;
        while($row = $result->fetch_assoc()){
            $i++;
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Course Name : <?php echo($row["course"]) ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">+2 Group : <?php echo($row["gro"]) ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">+2 Mark (min) : <?php echo($row["total"]) ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">+2 Cut-Off (min) : <?php echo($row["cut"]) ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted">10th Mark (min) : <?php echo($row["ten"]) ?></h6>
                        <form action="/admin/delete.php" method="post" class="mt-4 text-end">
                            <input type="hidden" name="id" value="<?php echo($row["id"]) ?>">
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }else{
?>
<p class="text-center text-secondary">Nothing Found</p>

<?php
    }
?>
</div>
<?php require("./layout/Footer.php"); ?>