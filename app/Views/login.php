
<html>
<meta content="" name="SACCO App">
  <link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/x-icon">
  <title>SACCO App</title>
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
 

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="assets/DataTables/datatables.min.css" rel="stylesheet">
  <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
  <link href="assets/css/select2.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">
    
  </head>
<style>
	body{
        background: #80808045;
  }
  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }
  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }
</style>

<body>


  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
</body>  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

<style>
  body{
    width: 100%;
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #007bff;
  }
  main#main{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
  }
  #login-right{
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }
  #login-right .card{
    margin: auto;
    z-index: 1;
  }
  .logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    border-radius: 50%;
    color: #000000b3;
    z-index: 10;
    text-align: center;
  }
</style>
</head>
<body>
  <main id="main" class="bg-dark">
    <div id="login-right">
      <div class="card col-md-10">
        <div class="card-body">
          <div class="logo">
            <img src="assets/img/logo.png" width="200px">
          </div>
          <form id="login-form">
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input type="password" id="password" name="password" class="form-control">
            </div>
            <center><button class="btn btn-wave col-md-5 btn-primary">Login</button></center>
            <br>
          </form>
        </div>
      </div>
    </div>
  </main>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
<script>
  $('#login-form').submit(function(e){
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
    if($(this).find('.alert-danger').length > 0 )
      $(this).find('.alert-danger').remove();
    $.ajax({
      url:'ajax.php?action=login',
      method:'POST',
      data:$(this).serialize(),
      error:err=>{
        console.log(err)
        $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
      },
      success:function(resp){
        if(resp == 1){
          location.href ='index.php?page=home';
        }else if(resp == 2){
          location.href ='voting.php';
        }else{
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script> 
</html>
