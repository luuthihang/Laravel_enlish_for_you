//  jQuery(document).ready(function($) {   
//   //selector đến menu cần làm việc
//   var TopFixMenu = $("#fixNav");
//   // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
//     $(window).scroll(function(){
//     // Nếu cuộn được hơn 150px rồi
//         if($(this).scrollTop()>150){
//       // Tiến hành show menu ra   
//         TopFixMenu.show();
//         }
//         else{
//       // Ngược lại, nhỏ hơn 150px thì hide menu đi.
//             TopFixMenu.hide();
//         }
//   }
//     )
// })

//-----------------ok------------
// jQuery(document).ready(function(){
//       pos=$(".header-bottom").position();
// $(window).scroll(function(){
//       var posScoll=$(document).scrollTop();
//       if(parseInt(posScoll)>parseInt(pos.top)){
//             $(".header-bottom").addClass('fixNav');
           
//       }else{
//             $(".header-bottom").removeClass('fixNav');
           
//       }
// });
// });
