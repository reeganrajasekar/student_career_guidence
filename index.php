<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="manifest" href="/static/manifest.json">
  <title>Student</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/static/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/static/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/static/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/static/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/static/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/static/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/static/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="/static/css/style.css" rel="stylesheet">

</head>

<body style="background-position:center center;background-repeat:no-repeat;background-size:cover">

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Student Login</h5>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="/signin.php" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Student Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Email.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" style="background-color:#012970;" type="submit">Login</button>
                    </div>
                    <p class="text-center">Don't have an Account? <a href="/register.php">Click here</a></p>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/static/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/static/vendor/chart.js/chart.umd.js"></script>
  <script src="/static/vendor/echarts/echarts.min.js"></script>
  <script src="/static/vendor/quill/quill.min.js"></script>
  <script src="/static/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/static/vendor/tinymce/tinymce.min.js"></script>
  <script src="/static/vendor/php-email-form/validate.js"></script>
  <script>
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("err").style.display="none"
      }, 3000)
      if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
      }
      setTimeout(()=>{
          document.getElementById("msg").style.display="none"
      }, 3000)
      if('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('/static/serviceWorker.js').then((reg) => {
            console.log('Worker Registered')
          }).catch((err) => {
            console.log('Error in service worker registration.')
          })
        })
      }
  </script>
  <!-- Template Main JS File -->
  <script src="/static/js/main.js"></script>

</body>

</html>