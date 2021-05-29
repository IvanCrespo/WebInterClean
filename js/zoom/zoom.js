$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    console.log(scroll);
      $(".zoom img").css({
          transform: 'translate3d(-50%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll)/100+')',
          opacity: 1-(scroll/800),
          
      });
  });