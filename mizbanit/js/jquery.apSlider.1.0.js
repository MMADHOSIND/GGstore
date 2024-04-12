/*-----------------------------------------------------------------------------------
    Class: apSlider
    Use: Image Slider Easing 
    Programming: Mohsen shafiee
    Site:  www.20script.ir
    Email: mohsen.sh12@hotmail.com 
    Version: 1.0
-----------------------------------------------------------------------------------*/
(function($){
  $.apSlider = function(selector, settings) {
    var config = $.extend({
        width: 600,
        height: 300,
        delay: 7000,
        timeAnimate: 1500,
        typeAnimate: 'easeOutBounce',
        nextSlide: 'none',
        prevSlide: 'none'
    }, settings);
    
    var slider = $(selector);
    var holder = slider.children('.holder');
    var img = holder.find('img');
    var count = img.length;
    var i = 0;
    
    slider.css({'width': config.width, 'height': config.height});
    img.each(function(){
      $(this).css({'width': config.width, 'height': config.height})
    });
    holder.css({'width': config.width * count});
    
    img.first().addClass('apActive');
    
    var moveSlideInterval = setInterval(function(){
      moveSlide('right');
    }, config.delay)
    
    var moveSlide = function(stat){
      if(stat == 'left'){
        i--;
        if (i == -1){i=count-1;}
      }else{
        i++;
        if (i >= count){i=0;}
      }
      
      holder.animate({'margin-left': -i * config.width}, config.timeAnimate, config.typeAnimate);
    }
    
    $(config.nextSlide).on('click', function() {
      moveSlide();
      clearTimeout(moveSlideInterval);
      moveSlideInterval = setInterval(function(){
        moveSlide();
      }, config.delay)
    });
    
    $(config.prevSlide).on('click', function() {
      moveSlide('left');
      clearTimeout(moveSlideInterval);
      moveSlideInterval = setInterval(function(){
        moveSlide();
      }, config.delay)
    });
  };
})( jQuery );