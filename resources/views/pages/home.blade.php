@extends('layout')
@section('content')

<section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                          
                                <div class="item active">
                                     <div class="slideImage">
                                            <div class="col-sm-6 ">
                                                <h1><span>English</span>-For You</h1>
                                                <h2> We will Develop Together </h2>
                                                <p>We are always together. </p>
                                                <button type="button" class="btn btn-default get">Do it now</button>
                                            </div>
                                            <!-- <div class="col-sm-6">
                                                <img src="{{('images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
                                                <img src="{{('images/home/pricing.png')}}"  class="pricing" alt="" />
                                            </div> -->
                                            <img src="{{('public/frontend/images/en2.jpg')}}">
                                    </div>
                                </div>
                                <div class="item">
                                     <div class="slideImage">
                                        <div class="col-sm-6">
                                            <h1><span>English</span>-For You</h1>
                                            <h2>English For future</h2>
                                            <p>We hope you have a good future. </p>
                                            <button type="button" class="btn btn-default get">Do it now</button>
                                        </div>
                                       <!--  <div class="col-sm-6">
                                            <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                            <img src="images/home/pricing.png"  class="pricing" alt="" />
                                        </div> -->
                                         <img src="{{('public/frontend/images/8.png')}}">
                                     </div>
                                </div>
                                
                                <div class="item">
                                    <div class="slideImage">
                                        <div class="col-sm-6">
                                            <h1><span>English</span>-For You</h1>
                                            <h2>Always by your side</h2>
                                            <p>We are always working hard for your development. </p>
                                            <button type="button" class="btn btn-default get">Do it now</button>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                            <img src="images/home/pricing.png" class="pricing" alt="" />
                                        </div> -->

                                         <img src="{{('public/frontend/images/hoa5.jpg')}}">
                                     </div>
                                </div>
                            <!-- </div> -->
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
</section>

 <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category Vocaburaly</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                           
                           
                            
                            <!-- <div class=" show-hide panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="show-hide fa fa-plus"></i></span>
                                            Womens
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="con panel-collapse collapse">
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
                            </div> -->
                        @foreach($titleVcabulary as $key=>$va)
                            <div style="color:black" class="">
                                <div class="show-hide">
                                    <h4 style="color:black;font-size:14px;" class="">
                                        <a style="color:black; padding-left:5px;">
                                            <span style="color:black;padding-right:5px;font-size:12px;" class="badge pull-right"><i class=" show-hide fa fa-plus"></i></span>
                                            {{$va->id}}{{$va->CV_title}}
                                        </a>
                                    </h4>
                                </div>
                                <div class="con">
                                        <ul style="color:black;">
                                            <li><a href="#">Fendi</a></li>
                                            <li><a href="#">Guess</a></li>
                                            <li><a href="#">Valentino</a></li>
                                            <li><a href="#">Dior</a></li>
                                            <li><a href="#">Versace</a></li>
                                        </ul>
                                </div>
                            </div>
                        @endforeach


                            
                            <!-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Shoes</a></h4>
                                </div>
                            </div> -->
                            
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Grammar</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($titleGrammar as $key=>$value)
                                    <li><a href="{{route('detail-grammar',$value->id)}}"> <span class="pull-right"></span>{{$value->title}}</a></li>
                                    @endforeach
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

<div class="features_items"><!--features_items-->
        <h2 class="title text-center">Category Vocabulary </h2>

       <!--  <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/home/product1.jpg')}}" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>$57</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="card_HVC middle">
                        <div class="front ft">
                            <img src="{{('public/frontend/images/hoa5.jpg')}}"/>
                            <div class="dital topDital">
                            <p>What is this?</p>
                            </div>
                        </div>
                        
                        <div class="back bk">
                            <div class="back-content middle1">
                                <h1>english_vocabory</h1>
                                <h1>Viennames_vocabory</h1>
                                <span>senten</span>
                                <div class="sm">
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </div>
                        </div>
                </div>     
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to item</a></li> -->
                    </ul>
                </div>
            </div>
        </div>


      <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front ft">
                        <img src="{{('public/frontend/images/hoabk1.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back bk">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front">
                        <img src="{{('public/frontend/images/anhhoa.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front">
                        <img src="{{('public/frontend/images/hoa3.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front">
                        <img src="{{('public/frontend/images/hoa4.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="card_HVC middle">
                        <div class="front">
                            <img src="{{('public/frontend/images/hoa5.jpg')}}"/>
                            <div class="dital topDital">
                            <p>What is this?</p>
                            </div>
                        </div>
                        
                        <div class="back">
                            <div class="back-content middle1">
                                <h1>english_vocabory</h1>
                                <h1>Viennames_vocabory</h1>
                                <span>senten</span>
                                <div class="sm">
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </div>
                        </div>
                </div>     
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

       <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front">
                        <img src="{{('public/frontend/images/hoa4.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="card_HVC middle">
                        <div class="front">
                            <img src="{{('public/frontend/images/hoa5.jpg')}}"/>
                            <div class="dital topDital">
                            <p>What is this?</p>
                            </div>
                        </div>
                        
                        <div class="back">
                            <div class="back-content middle1">
                                <h1>english_vocabory</h1>
                                <h1>Viennames_vocabory</h1>
                                <span>senten</span>
                                <div class="sm">
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </div>
                        </div>
                </div>     
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

       <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                      <div class="card_HVC middle">
                    <div class="front ft">
                        <img src="{{('public/frontend/images/hoa6.jpg')}}"/>
                        <div class="dital topDital">
                        <p>What is this?</p>
                        </div>
                    </div>
                    
                    <div class="back bk">
                        <div class="back-content middle1">
                            <h1>english_vocabory</h1>
                            <h1>Viennames_vocabory</h1>
                            <span>senten</span>
                            <div class="sm">
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-search" aria-hidden="true"></i></a>
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>   
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Learn more</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
      <!--  phan trang -->
      
    </div><!--features_items-->
    

    <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">Truyện</a></li>
                <li><a href="#blazers" data-toggle="tab">Câu thông dụng</a></li>
                <li><a href="#sunglass" data-toggle="tab">Dạy Phát Âm</a></li>
                <li><a href="#kids" data-toggle="tab">Topics</a></li>
                <li><a href="#poloshirt" data-toggle="tab">Tình Huống</a></li>
            </ul>
        </div>
       <!--  <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>$59</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="blazers" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>$58</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
            
            <div class="tab-pane fade" id="sunglass" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="tab-pane fade" id="kids" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="tab-pane fade" id="poloshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div> -->
    </div><!--/category-tab-->

    <!--recommended_items-->
    <div class="recommended_items">
        <h2 class="title text-center">Nổi Bật</h2>
        
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">   
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">  
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend1.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend2.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/recommend3.jpg" alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>          
        </div>
    </div>
     <!--/recommended_items-->
</div>
<script type="text/javascript">
    $(document).ready(function(){

        // $(".front").click(function(){
        //     $(this).toggleClass("ft");
        //     $(this).next(".back").toggleClass("bk");
        // });

        // $(".back").click(function(){
        //     $(this).toggleClass("bk1");
        // });

        // $(".back").click(function(){
        //     // $(this).css("transform","perspective(600px) rotateY(0deg)");
        //     $(this).toggleClass("bk");
        // });

        $(".card_HVC").click(function(){
            $(this).find(".front").toggleClass("ft");
            $(this).find(".back").toggleClass("bk");
        });
        
    });
</script>

@endsection