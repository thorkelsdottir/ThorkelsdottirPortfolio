$(document).ready(function(){

//fyrir menuhnapp
      $(".menu-button").click(function(){
       $(this).closest("body").toggleClass("active");
      });
      $(".menu-button2").click(function(){
       $(this).closest("body").toggleClass("active");
      });

      $(".menu-button3").click(function(){
       $(this).closest("body").toggleClass("active");
      });


//hér er fyrir orða ticker
    (function() {
      var delete_speed, letters, next_delay, next_ticker, split, text_delete, text_write, write_speed;

      write_speed = 100;

      delete_speed = 50;

      next_delay = 1000;

      letters = '';

      split = function() {
        $('.ticker_item').each(function() {
          var i, text, words;
          i = void 0;
          text = void 0;
          words = void 0;
          words = $(this).text().split('');
          for (i in words) {
            i = i;
            // if (window.CP.shouldStopExecution(1)) {
            //   break;
            // }
            i = i;
            words[i] = '<span>' + words[i] + '</span>';
          }
          // window.CP.exitedLoop(1);
          text = words.join('');
          $(this).html(text);
        });
      };

      next_ticker = function() {
        if ($('.current_ticker').is(':last-child')) {
          $('.current_ticker').removeClass('current_ticker').addClass('delete_ticker');
          $('.first_ticker').addClass('current_ticker');
        } else {
          $('.current_ticker').removeClass('current_ticker').addClass('delete_ticker').next().addClass('current_ticker');
        }
        setTimeout((function() {
          $('.delete_ticker').appendTo('.ticker').removeClass('delete_ticker');
          text_write();
        }), 40);
      };

      text_delete = function() {
        setTimeout((function() {
          var text_delete_timer;
          text_delete_timer = setInterval((function() {
            if (letters > 0) {
              $('.current_ticker span:nth-of-type(' + letters + ')').css('display', 'none');
              letters--;
            } else {
              clearInterval(text_delete_timer);
              next_ticker();
            }
          }), delete_speed);
        }), next_delay);
      };

      text_write = function() {
        var count, text_write_timer;
        count = 0;
        letters = $('.current_ticker span').length;
        text_write_timer = setInterval((function() {
          if (count - 1 < letters) {
            $('.current_ticker span:nth-of-type(' + count + ')').css('display', 'inline');
            count++;
          } else {
            clearInterval(text_write_timer);
            text_delete();
          }
        }), write_speed);
      };

      split();

      text_write();

    }).call(this);


// fyrir vertical scrolling
  $.jInvertScroll = function(sel, options) {
      var defaults = {
          width: 'auto',		    // The horizontal container width
          height: 'auto',		    // How far the user can scroll down (shorter distance = faster scrolling)
          onScroll: function(percent) {  // Callback fired when the user scrolls down, the percentage of how far the user has scrolled down gets passed as parameter (format: 0.xxxx - 1.0000)
              // do whatever you like
          }
      };

      var config = $.extend(defaults, options);

      // if(typeof sel === 'Object' && sel.length > 0) {
      //     return;
      // }

      var elements = [];
      var longest = 0;

      // Extract all selected elements from dom and save them into an array
      $.each(sel, function(i, val) {
          $(val).each(function(e) {
              var tmp = {
                  width: $(this).width(),
                  height: $(this).height(),
                  el: $(this)
              };

              elements.push(tmp);

              if(longest < tmp.width) {
                  longest = tmp.width;
              }
          });
      });

      // Use the longest elements width + height if set to auto
      if(config.width == 'auto') {
          config.width = longest;
      }

      if(config.height == 'auto') {
          config.height = longest;
      }

      // Set the body to the selected height
      $('body').css('height', config.height+'px');

      // Listen for the actual scroll event
      $(window).on('scroll resize', function(e) {
          var currY = $(this).scrollTop();
          var totalHeight = $(document).height();
          var winHeight = $(this).height();
          var winWidth = $(this).width();

          // Current percentual position
          var scrollPercent = (currY / (totalHeight - winHeight)).toFixed(4);

          // Call the onScroll callback
          if(typeof config.onScroll === 'function') {
              config.onScroll.call(this, scrollPercent);
          }

          // do the position calculation for each element
          $.each(elements, function(i, el) {
              var pos = Math.floor((el.width - winWidth) * scrollPercent) * -1;
              el.el.css('left', pos);
          });
      });
    };

    $.jInvertScroll(['.scroll'],        // an array containing the selector(s) for the elements you want to animate
        {
                           // optional: define the height the user can scroll, otherwise the overall length will be taken as scrollable height
        onScroll: function(percent) {   //optional: callback function that will be called when the user scrolls down, useful for animating other things on the page
            // console.log(percent);
        }
    });


//Hér er til að skipta út fyrirsognum
    $(window).on("scroll resize", function () {
        var pos = $('#date').offset();
        $('.post').each(function () {
            if (pos.top >= $(this).offset().top && pos.top <= $(this).next().offset().top) {
                $('#date').html($(this).find('.description').text()); //or any other way you want to get the date
                return; //break the loop
            }
        });
    });

    $(document).ready(function () {
        $(window).trigger('scroll'); // init the value
    });

});

//fyrir video scroll

  var frameNumber = 0, // start video at frame 0
  // lower numbers = faster playback
  playbackConst = 800,
  // get page height from video duration
  setHeight = document.getElementById("set-height"),
  // select video element
  vid = document.getElementById('v0');
  // var vid = $('#v0')[0]; // jquery option
    //console.log(vid.readyState);
  // dynamically set the page height according to video length
  if (vid.readyState < 4) {
    vid.addEventListener('loadedmetadata', function() {
      setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
  });
} else {
  setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
}

  // Use requestAnimationFrame for smooth playback
  function scrollPlay() {
  var frameNumber = window.pageYOffset / playbackConst;
  vid.currentTime = frameNumber;
  window.requestAnimationFrame(scrollPlay);
  }

  window.requestAnimationFrame(scrollPlay);



// init ScrollMagic Controller
// var controller = new ScrollMagic.Controller();
