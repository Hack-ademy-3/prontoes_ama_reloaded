<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pronto.es</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  {{--<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" --}}
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> 


  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

</head>

<body>

@if(session('access.denied.revisor.only'))
<div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
@endif

@if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif

@include('layouts._header')


@yield('hueco')  


@include('layouts._footer')

  <!-- Vendor JS Files -->
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
 
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script>
    let logout_btn = document.getElementById('logout');
    let logout_form = document.getElementById('form_logout');
    if (logout_btn != null ){
    logout_btn.addEventListener('click', function ()
      {
        logout_form.submit();
      } 
      )
    }
    </script>
    
 
</body>

</html>