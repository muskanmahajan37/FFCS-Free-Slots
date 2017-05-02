function get_background(){
  var bg = $('#base-layer').data('bg');
  $('body').css({
    background : 'url(' + bg + ') fixed center center no-repeat',
  });
}

function move(){
  var cursor_x = event.pageX;
  var cursor_y = event.pageY;
  $('.parallax-img').each(function (){
    var vel_x = $(this).data('vel_x');
    var vel_y = $(this).data('vel_y');
    var offset_x = $(this).data('offset_x');
    var offset_y = $(this).data('offset_y');
    var new_x = -cursor_x*vel_x + offset_x;
    var new_y = -cursor_y*vel_y + offset_y;
    $(this).css({"left" : new_x});
    $(this).css({"top" : new_y});
  })
}

get_background();

$(window).mousemove(function(event) {
  move();
}); 

$(window).scroll(function(){
  move();                     
});

$(window).resize(function() {
  move();
});


$(function() {
  // Duplicate image sizes from the CSS (this is important)
  var image_width = $('ul.sdt_menu').find('li').width();
  var animation_size = $('ul.sdt_menu').find('.sdt_wrap').css('top');
  
  $('#sdt_menu > li').bind('mouseenter',function(){
    var $elem = $(this);
    $elem.find('img')
    .stop(true)
    .animate({
      'width':image_width,
      'height':image_width,
      'left':'0px'
    },400,'easeOutBack')
    .andSelf()
    .find('.sdt_wrap')
    .stop(true)
    .animate({'top':'140px'},500,'easeOutBack')
    .andSelf()
    .find('.sdt_active')
    .stop(true)
    .animate({'height':image_width},300,function(){
      var $sub_menu = $elem.find('.sdt_box');
      if($sub_menu.length){
        var left = image_width;
        if($elem.parent().children().length == $elem.index()+1)
          left = -image_width;
        $sub_menu.show().animate({'left':left},200);
      }	
    });
  }).bind('mouseleave',function(){
    var $elem = $(this);
    var $sub_menu = $elem.find('.sdt_box');
    if($sub_menu.length)
      $sub_menu.hide().css('left','0px');

    $elem.find('.sdt_active')
    .stop(true)
    .animate({'height':'0px'},300)
    .andSelf().find('img')
    .stop(true)
    .animate({
      'width':'0px',
      'height':'0px',
      'left':(image_width/2)},400)
    .andSelf()
    .find('.sdt_wrap')
    .stop(true)
    .animate({'top':animation_size},500);
  });
});