<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <style>
    .p{
        font-size:20px; 
    }
    .option_container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: rgba(255, 255, 255, 0.6);
  z-index: 3;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all .2s;
  transition: all .2s;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.options {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.option_container {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
@include('user.style')
.options a {
  display: inline-block;
  padding: 8px 15px;
  border-radius: 30px;
  width: 165px;
  text-align: center;
  -webkit-transition: all .3s;
  transition: all .3s;
  margin: 5px 0;
}
.options .option1 {
  background-color: #f7444e;
  border: 1px solid #f7444e;
  color: #ffffff;
}
.options .option1:hover {
  background-color: transparent;
  color: #f7444e;
}.options .option2:hover {
  background-color: transparent;
  color: #000000;
}.img-box svg {
  width: 55px;
  height: auto;
  fill: #ffffff;
}.img-box {
  margin-bottom: 15px;
}
  </style>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link href="home/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
    <div style="height:70px; margin-top:0%">
        @include('layouts.header')
    </div>

    @yield('content')

    
    <br><br><br><br><br><br><br><br><br><br><br><br>
    @include('footer')

</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>