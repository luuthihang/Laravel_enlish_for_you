@extends('admin_layout')
@section('admin_content')
	<div class="form-w3layouts">
		<div class="row">
        	 <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Story
                        </header>
                        <div class="panel-body">
                        	<?php
                        	// $message=Session::get('message');
                        	// if($message){
                        	// 	echo '<span>'.$message.'</span>';
                        	//}
                        	?>
                            <div class="position-center">
                                <form  action="{{URL::to('save-story')}}" method="post"role="form" enctype="multipart/form-data">
                                	{{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name english story </label>
                                    <input name="nameEn" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name VietNam story</label>
                                    <input name="nameVn" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
	                            <div class="">
	                            	<lable for="content_en">Nội dung tiếng anh</lable>
	                                <textarea style="resize:none" rows="5" class="form-control" name="content_story_en" id="ckeditor1" placeholder="Content english">
	                                </textarea>
	                            </div>
	                            <div class="">
	                            	<lable for="content_en">Nội dung tiếng Việt</lable>
	                            	<textarea style="resize:none" rows="5" class="form-control" name="content_story_vn" id="ckeditor2" placeholder="content vn story">
	                            	</textarea>

                                    
	                            </div>
	                            <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Image1</label>
                                    <input name="image1" type="text" class="form-control" id="" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image1</label>
                                    <input name="image2" type="text" class="form-control" id="" placeholder="Password">
                                </div> -->

                               <!--  <select name="story-status" class="form-control input-ms m-bot15">
                                	<option value="0">Ẩn</option>
                                	<option value="1">Hiện</option>
                                </select> -->

                                <div class="form-group">
                                    <label for="exampleInputFile">File input image</label>
                                    <input name="image1" type="file" id="exampleInputFile">
<!--                                     <p class="help-block">Example block-level help text here.</p> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input image</label>
                                    <input name="image2" type="file" id="exampleInputFile">
                                </div>

                                <!-- <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <button type="submit" class="btn btn-info" name="add_story">Add Story </button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
          
            </div>
        </div>
     </div>
    
@endsection