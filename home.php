<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student</title>
    <link rel="stylesheet" href="/static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="/static/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .nav-link{
            font-size: 18px;
            font-weight:600;
            text-align: center;
            padding:10px
        }
        .nav-item > .active{
            color:rgba(106, 17, 203, 1) !important;
        }
    </style>
</head>
<body>
    <div id="loader" style="position:fixed;width:100%;height:100%;background-color:rgba(106, 17, 203, 1);z-index: 10000;top:0px;display: none;">
        <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
          <span class="sr-only"></span>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background:white;box-shadow:1px 1px 2px #aaa;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="/static/img/logo.png" alt="College Logo" style="height:50px" class="col-logo rounded">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/student?page=1">Home</a>
                    </li>
                    <li class="nav-item dropdown text-center">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu text-center">
                            <li><a class="dropdown-item" href="/">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-3 mb-3">
        <p class="alert alert-primary">Welcome, <?php echo($_COOKIE["name"]) ?>!</p>
        <p style="font-weight:600;">Course Recommandations for you,</p>
        <div class="row">
        <?php
        require("./admin/layout/db.php");
        $total = $_COOKIE["total"];
        $ten = $_COOKIE["ten"];
        $cut = $_COOKIE["cut"];
        $gro = $_COOKIE["gro"];
        $result = $conn->query("SELECT * FROM course WHERE gro='$gro' AND total<=$total AND ten<=$ten AND cut<=$ten ORDER BY id DESC");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Course Name : <?php echo($row["course"]) ?></h5>
                            <p>Requirements:</p>
                            <div class="container">
                                <h6 class="card-subtitle mb-2 text-muted">+2 Group : <?php echo($row["gro"]) ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">+2 Mark (min) : <?php echo($row["total"]) ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">+2 Cut-Off (min) : <?php echo($row["cut"]) ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">10th Mark (min) : <?php echo($row["ten"]) ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }else{
        ?>
        <p class="text-center text-secondary pt-5">Nothing Found</p>

        <?php
            }
        ?>
        </div>
    </main>

    

<script src="/static/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; left:30px;background-color:tomato;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 5000)
    if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; left:30px;background-color:green;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 5000)
</script>
</body>
</html>