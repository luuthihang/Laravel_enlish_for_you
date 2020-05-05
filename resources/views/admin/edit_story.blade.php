@extends('admin_layout')
@section('admin_content')
	<div class="form-w3layouts">
		<div class="row">
        	 <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            edit Story
                        </header>
                        <div class="panel-body">
                        	<?php
                        	$message=Session::get('message');
                        	if($message){
                        		echo '<span>'.$message.'</span>';
                        	}
                        	?>
                            @foreach($item_story as $key=>$value)
                            <div class="position-center">
                                <form  action="{{URL::to('update-story',$value->id)}}" method="post"role="form"  enctype="multipart/form-data">
                                	{{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name english story </label>
                                    <input value="{{$value->title_en}}"name="nameEn" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name VietNam story</label>
                                    <input value="{{$value->title_vn}}" name="nameVn" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
	                            <div class="">
	                            	<lable for="content_en">Nội dung tiếng anh</lable>
	                                <textarea id="ckeditor1" value="" style="resize:none" rows="5" class="form-control" name="content_story_en" id="">
                                        {{$value->content_en}}
	                                </textarea>
	                            </div>
	                            <div class="">
	                            	<lable for="content_en">Nội dung tiếng Việt</lable>
	                            	<textarea id="ckeditor2" value="" style="resize:none" rows="5" class="form-control" name="content_story_vn" id="" >
                                        {{$value->content_vn}}
	                            	</textarea>
	                            </div>

	                            <div class="form-group">
                                    <label for="exampleInputPassword1">Image1</label>
                                      <input name="image1" type="file" id="exampleInputFile">
                                   <!--  <input value="{{$value->image1}}" name="image1" type="text" class="form-control" id="" > -->
                                    <img name="image11" style="width:100px;" src="../public/frontend/images/{{$value->image1}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image2</label>
                                     <input name="image2" type="file" id="exampleInputFile">
                                   <!--  <input value="{{$value->image2}}" name="image2" type="text" class="form-control" id=""> -->
                                    <img name="image22" style="width:100px;" src="../public/frontend/images/{{$value->image2}}"/>
                                </div>

                                <!-- <select name="story-status" class="form-control input-ms m-bot15">
                                	<option value="0">Ẩn</option>
                                	<option value="1">Hiện</option>
                                </select> -->

                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div> -->
                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-info" name="add_story">Edit Story </button>
                            </form>
                            </div>
                            @endforeach

                        </div>
                    </section>

            </div>
          
            </div>
        </div>
     </div>
    
@endsection