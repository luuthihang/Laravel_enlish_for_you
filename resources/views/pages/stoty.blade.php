@extends('layout')
@section('content')
<div style="border:1px solid black;" class="container">
	<div class="row">
		<div class="col-md-3 thumbnail">
			<img style="width:250px;margin-top:60px;" src="./public/frontend/images/hoabk1.jpg"/>
		</div>
		<div class="col-md-9 thumbnail">
			<div style="padding-top:0px;margin-top:112px;width:100%;height:100px;"class="title_story">
				<h2 style="border-bottom:2px solid #e91e69;color:#e91e69; text-align:center;">Food and Health Vocabulary</h2>
			</div>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-10">
			<div class="container_story">
				<span class="en">English</span>
				<input type="checkbox" class="check">
				<span class="vn">VietNam</span>

				<div style="font-family: Cabin,sans-serif;color:black;" class="content_story contentEnglish">
					<h2>Food and Health Vocabulary</h2>
					<p>The food we eat can affect our health in many ways. If we eat food that's contaminated with bacteria, we'll be sick and go to the toilet more often. We can also get sick if we eat dangerous foods like poisonous mushrooms or certain kinds of fish. These foods have short-term effects on our health, but food can also have long-term effects on our health.

					These long-term effects vary depending on where we live and how much we eat. In a country with food shortages due to war or lack of rain, people might suffer from malnutrition. People with malnutrition lose a lot of weight and become very thin and weak. They can also develop long-term illnesses due to the lack of essential nutrients like vitamin C and iron. People in rich, developed countries can also develop food-related illnesses, but they're usually related to eating too much, or overeating, rather than eating too little.</p>
				</div>

				<div class="content_story contentVietNam">
					<h2>Từ vựng về Thực phẩm và Sức khỏe</h2>

					<p>Thực phẩm chúng ta ăn có thể ảnh hưởng đến sức khỏe của chúng ta theo nhiều cách. Nếu chúng ta ăn thực phẩm bị nhiễm vi khuẩn, chúng ta sẽ bị ốm và đi vệ sinh thường xuyên hơn. Chúng ta cũng có thể bị bệnh nếu ăn thực phẩm nguy hiểm như nấm độc hoặc một số loại cá. Những thực phẩm này có tác dụng ngắn hạn đối với sức khỏe của chúng ta, nhưng thực phẩm cũng có thể có tác dụng lâu dài đối với sức khỏe của chúng ta.

					Những ảnh hưởng lâu dài này khác nhau tùy thuộc vào nơi chúng ta sống và chúng ta ăn bao nhiêu. Ở một đất nước thiếu lương thực do chiến tranh hoặc thiếu mưa, mọi người có thể bị suy dinh dưỡng. Người bị suy dinh dưỡng giảm cân rất nhiều và trở nên rất gầy và yếu. Họ cũng có thể phát triển các bệnh lâu dài do thiếu các chất dinh dưỡng thiết yếu như vitamin C và sắt. Người dân ở các nước giàu, phát triển cũng có thể mắc các bệnh liên quan đến thực phẩm, nhưng họ thường liên quan đến việc ăn quá nhiều hoặc ăn quá nhiều thay vì ăn quá ít.</p>
				</div>

			</div>
		</div>
	</div>
</div>
  @endsection