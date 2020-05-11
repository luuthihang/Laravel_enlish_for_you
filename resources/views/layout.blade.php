<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | English For You</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


     <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animation1h.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/modifile.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/style_menu.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/execire.css')}}" rel="stylesheet">
    
     <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/language1.css')}}">
     <link rel="stylesheet" href="{{('public/frontend/css/SuLyAnh.css')}}" type="text/css"></link>
     <!-- bootstrap4_add.css -->
     <link href="{{asset('public/frontend/css/bootstrap4_add.css')}}" rel="stylesheet">
   <!--  https://kit-free.fontawesome.com/releases/latest/css/free.min.css -->



      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
  
    <link href="{{asset('public/frontend/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('public/frontend/css/hover1VocaburalyTitle.css')}}" rel="stylesheet" type="text/css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>frontend
    <![endif]-->       
    <link rel="shortcut icon" href="{{('../public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- cardForGrammar.blade.php -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->


<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->

   



</head><!--/head-->

<body>
     <!--header-->
    @include('header')
    <!--/header-->
    
    <!--slider-->
   
    <!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                    @yield('content')
            </div>
        </div>
    </section>
     <!--Footer-->
   @include('footer')
    <!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    
    <!--test vocabulary <script src="{{asset('public/frontend/js/main.js')}}"></script> -->

    <script src="{{asset('public/frontend/js/style_menu.js')}}"></script>
    <script src="{{asset('public/frontend/js/ShowInfoWord_vocabularyItems.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>



    
 
</body>
</html>