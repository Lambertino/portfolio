$( document ).ready(function() {

    $("#portfolio .item").hover(
        function () {
            $(this).find('img').addClass('floating');
        },
        function () {
            $(this).find('img').removeClass("floating");
        }
    );

    $('.carousel').carousel({
        interval: 3000
    })

   // particles on skills section
   // http://thenewcode.com/1159/Create-a-Dynamic-Point-Mesh-Animation-with-HTML5-Canvas
   let resizeReset = function() {
      w = canvasBody.width = window.innerWidth;
      h = canvasBody.height = window.innerHeight;
   }

   const opts = {
      particleColor: "rgb(200,200,200)",
      lineColor: "rgb(200,200,200)",
      particleAmount: 30,
      defaultSpeed: 1,
      variantSpeed: 1,
      defaultRadius: 2,
      variantRadius: 2,
      linkRadius: 200,
   };

   window.addEventListener("resize", function(){
      deBouncer();
   });

   let checkDistance = function(x1, y1, x2, y2){
      return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
   };

   Particle = function(xPos, yPos){
    this.x = Math.random() * w;
    this.y = Math.random() * h;
    this.speed = opts.defaultSpeed + Math.random() * opts.variantSpeed;
    this.directionAngle = Math.floor(Math.random() * 360);
    this.color = opts.particleColor;
    this.radius = opts.defaultRadius + Math.random() * opts. variantRadius;
    this.vector = {
        x: Math.cos(this.directionAngle) * this.speed,
        y: Math.sin(this.directionAngle) * this.speed
    };
    this.update = function(){
        this.border();
        this.x += this.vector.x;
        this.y += this.vector.y;
    };
    this.border = function(){
        if (this.x >= w || this.x <= 0) {
            this.vector.x *= -1;
        }
        if (this.y >= h || this.y <= 0) {
            this.vector.y *= -1;
        }
        if (this.x > w) this.x = w;
        if (this.y > h) this.y = h;
        if (this.x < 0) this.x = 0;
        if (this.y < 0) this.y = 0;
    };
    this.draw = function(){
        drawArea.beginPath();
        drawArea.arc(this.x, this.y, this.radius, 0, Math.PI*2);
        drawArea.closePath();
        drawArea.fillStyle = this.color;
        drawArea.fill();
    };
   };

   function setup(){
    particles = [];
    resizeReset();
    for (let i = 0; i < opts.particleAmount; i++){
        particles.push( new Particle() );
    }
    window.requestAnimationFrame(loop);
   }

   function loop(){
    window.requestAnimationFrame(loop);
    drawArea.clearRect(0,0,w,h);
    for (let i = 0; i < particles.length; i++){
        particles[i].update();
        particles[i].draw();
    }
   }

  // scrollFun
  jQuery.fn.niceScroll = function() {
      $(this).click(function(e) {
          var h = $(this).attr('href'),
          target;

          if (h.charAt(0) == '#' && h.length > 1 && (target = $(h)).length > 0){
              var pos = Math.max(target.offset().top, 0);
              e.preventDefault();
              $('body,html').animate({
                scrollTop : pos
              }, 'slow', 'swing');
          }
      });
  };
  $('.scroll').niceScroll();
});
