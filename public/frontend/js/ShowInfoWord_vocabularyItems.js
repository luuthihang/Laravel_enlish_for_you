$(document).ready(function(){
  //    $('.contentCardAdd').hide();

  // $('.btn_addVc').click(function(){
  //   $('.contentCardAdd').slideToggle(600);
   
  //  });
    var button='.btn_addVc';
    var contentCard='.contentCardAdd';
      showInfoVocabulary(button,contentCard);

      showInfoVocabulary('.show-hide','.con');
       //$('html,body').animate({scrollTop::$(button).offset().top},400);

    });



function showInfoVocabulary(button,contentCardAdd){
   
  $(contentCardAdd).hide();
  $(button).on('click',function(){
    // $('contentCard').addClass('contentCardAdd');
    // $(this).next($(contentCardAdd).slideToggle(600));
     $(this).next(contentCardAdd).slideToggle(300);

   });
}