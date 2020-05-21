@extends('admin_layout')
@section('admin_content')


<style type="text/css">
        table,th,td{
            border:1px solid black;
        }
        table{
           border-collapse: collapse;
            width: 100%;
        }
    </style>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Responsive Table
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input id="myInput" type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button  class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
                       <?php
                          $message=Session::get('message');
                          if($message){
                            echo '<span>'.$message.'</span>';
                            Session::put('message',null);
                          }
                          ?>
      <table border="1" class="table"><!-- table table-striped b-t b-light -->
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th style="width:1%;">id</th>
            <th style="width:2%;">Name EN</th>
            <th>Name Vn</th>
            <th>Content EN</th>
            <th>Content VN</th>
            <th>Image1</th>
            <th>image2</th>
            <th colspan="2">action</th>
           <!--  <th style="width:30px;"></th> -->
          </tr>
        </thead>
        <tbody id="myTable">
          <!-- <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>Idrawfast prototype design prototype design prototype design prototype design prototype design</td>
            <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
            <td><span class="text-ellipsis">{item.PrHelpText1}</span></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr> -->
          @foreach($sen_all_story as $key=>$value)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$value->id}}</span></td>
            <td><span class="text-ellipsis">{{$value->title_en}}</span></td>
            <td><span class="text-ellipsis">{{$value->title_vn}}</span></td>
            <td><span class="text-ellipsis">{{$value->content_en}}</span></td>
            <td><span class="text-ellipsis">{{$value->content_vn}}</span></td>
            <td><span class="text-ellipsis"><img style="width:100px;" src="public/frontend/images/{{$value->image1}}"/></span></td>
            <td><span class="text-ellipsis"><img style="width:100px;" src="public/frontend/images/{{$value->image2}}"/></span></td>
            <td> <a  href="{{URL::to('/edit-story',$value->id)}}"  style="color:green; font-size:20px;" class="glyphicon glyphicon-pencil"></a></td>
            <td><a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete-story',$value->id)}}" style="color:red;font-size:20px;" class="fa fa-trash"></a></td>
           <!--  <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a>
            </td> -->
          </tr>
          @endforeach
          
          
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection