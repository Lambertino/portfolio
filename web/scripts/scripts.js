$( document ).ready(function() {
   $("#portfolio .item").hover(
      function () {
        $(this).find('img').addClass('floating');
      },
      function () {
        $(this).find('img').removeClass("floating");
      }
    );
});

// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
