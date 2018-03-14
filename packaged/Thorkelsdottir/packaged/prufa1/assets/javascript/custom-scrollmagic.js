$(document).ready(function(){

  var img = $('.pinned-trigger0');
  var screenHeight = screen.height;
  var controller = new ScrollMagic.Controller();

  img.each( function() {
    // console.dir(this.children[1].children[0]);
    var scene0 = new ScrollMagic.Scene({
     triggerElement: this,
     duration: this.children[1].children[0].clientHeight,
     triggerHook: 0,
     reverse: true
    })
    .setPin(this.children[0])
    .addTo(controller)
    // console.log("hæ");

  });

});
