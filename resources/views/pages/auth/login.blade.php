@extends('pages.auth.authtemplate')

 @section('main')       
   
    <form class="login">
  
  <fieldset>
    
  	<legend class="legend">FlexiMall Login</legend>
    
    <div class="input">
    	<input type="email" placeholder="Email" required="">
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
    	<input type="password" placeholder="Password" required="">
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
    
  </fieldset>
  
  <div class="feedback">
  	login successful <br>
    redirecting...
  </div>
  
</form>
<!--      <script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-f961f59a28ef4fd551736b43f94620b5.js"></script>

    <script src="js/jquery.min.js"></script>-->

        <script>
      $('.input').focusin(function () {
    $(this).find('span').animate({ 'opacity': '0' }, 200);
});
$('.input').focusout(function () {
    $(this).find('span').animate({ 'opacity': '1' }, 300);
});
$('.login').submit(function () {
    $(this).find('.submit i').removeAttr('class').addClass('fa fa-check').css({ 'color': '#fff' });
    $('.submit').css({
        'background': '#2ecc71',
        'border-color': '#2ecc71'
    });
    $('.feedback').show().animate({
        'opacity': '1',
        'bottom': '-80px'
    }, 400);
    $('input').css({ 'border-color': '#2ecc71' });
    return false;
});
      //@ sourceURL=pen.js
    </script>

    
    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
@stop    

