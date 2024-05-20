<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <style>
    .p{
        font-size:25px; 
        
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
    <div style="height:70px">
        @include('header')
    </div>

    @include('search')

    
    <br><br><br><br><br><br><br><br><br><br><br><br>
    @include('footer')

</body>
</html>