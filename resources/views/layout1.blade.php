<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | English For You</title>

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



      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
   <!--  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
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
</head><!--/head-->

<body>
    <!--header-->
    @include('header')
    <!--/header-->
    
    <!--slider-->
    @include('slider')
    <!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category Vocaburaly</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Sportswear
                                        </a>
                                    </h4>
                                </div>
                                <div id="sportswear" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Nike </a></li>
                                            <li><a href="#">Under Armour </a></li>
                                            <li><a href="#">Adidas </a></li>
                                            <li><a href="#">Puma</a></li>
                                            <li><a href="#">ASICS </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Mens
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                            <li><a href="#">Armani</a></li>
                                            <li><a href="#">Prada</a></li>
                                            <li><a href="#">Dolce and Gabbana</a></li>
                                            <li><a href="#">Chanel</a></li>
                                            <li><a href="#">Gucci</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Womens
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Fashion</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Households</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Interiors</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Clothing</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Bags</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Grammar</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right"></span>1. Thì hiện tại đơn –  Present simple</a></li>
                            
                                    <li><a href="#"> <span class="pull-right"></span>2. Thì hiện tại tiếp diễn – Present continuous tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>3. Thì hiện tại hoàn thành – Present perfect tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>4. Thì hiện tại hoàn thành tiếp diễn – Present perfect continuous tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>5. Thì quá khứ đơn – Past simple tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>6. Thì quá khứ tiếp diễn – Past continuous tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>7. Thì quá khứ hoàn thành – Past perfect tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>8. Thì quá khứ hoàn thành tiếp diễn – Past perfect continuous tense </a></li>
                                    <li><a href="#"> <span class="pull-right"></span>9. Thì tương lai đơn – Simple future tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>10. Thì tương lai tiếp diễn – Future continuous tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>11. Thì tương lai hoàn thành – Future perfect tense</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>12. Thì tương lai hoàn thành tiếp diễn – Future perfect continuous tense</a></li>
                                    
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Grammar</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right"></span>1. PHÂN BIỆT CÁCH DÙNG LIKE VÀ AS </a></li>
                            
                                    <li><a href="#"> <span class="pull-right"></span>2. TIỀN TỐ HẬU TỐ TRONG TIẾNG ANH </a></li>
                                    <li><a href="#"> <span class="pull-right"></span>3. PHÂN BIỆT CÁCH DÙNG ALREADY, SINCE, JUST, STILL VÀ YET</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>4. HƯỚNG DẪN PHÂN BIỆT CÁCH DÙNG SINCE VÀ AS</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>5. CẤU TRÚC HAD BETTER </a></li>
                                    <li><a href="#"> <span class="pull-right"></span>6. CẤU TRÚC NOT ONLY BUT ALSO</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>7. CẤU TRÚC HAD BETTER TRONG TIẾNG ANH</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>8. Cấu Trúc Câu So Sánh Trong Tiếng Anh</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>9. CÂU BỊ ĐÔNG </a></li>
                                    <li><a href="#"> <span class="pull-right"></span>10.CÁCH DÙNG SO,TOO,ETHRE,NETHER</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>11.CÂU HỎI ĐUÔI</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>12:USER,BO USER TO</a></li>
                                    <li><a href="#"> <span class="pull-right"></span>12:Mệnh ĐỀ QUAN HỆ</a></li>
                                   <li><a href="#"> <span class="pull-right"></span>13:ANOTHET OTHER OTHERS THE OTHER THE OTHERS</a></li>
                                  
                                   <li class="menuSub"><a href="#"> <span class="pull-right-drowp"></span>14:Loại từ</a>
                                        <ul class="menuSubList">
                                            <li class="menuSubItem"><a href="#">Động Từ</a></li>
                                            <li class="menuSubItem"><a href="#">Tính Từ</a></li>
                                            <li class="menuSubItem"><a href="#">Danh Từ</a></li>
                                            <li class="menuSubItem"><a href="#">Trạng Từ</a></li>
                                            <li class="menuSubItem"><a href="#">Giới Từ</a></li>
                                            <li class="menuSubItem"><a href="#">Đại từ</a></li>
                                        </ul>

                                   </li>  
                                    
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <!--price-range-->
                        <!-- <div class="price-range">
                            <h2>Grammar structure</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div> -->
                        <!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>

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
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
    <script src="{{asset('public/frontend/js/style_menu.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>