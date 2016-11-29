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
