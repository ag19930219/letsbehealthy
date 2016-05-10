(function () {
  $(document).on('pageshow', '#home', function () {
    var angle = 0;
    _swipe();
    $(window).resize(_swipe);

    function _swipe() {
      var boxWidth = $('#box').width();
      $('#box1').css({
        '-webkit-transform': 'rotateY(0deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        '-moz-transform': 'rotateY(0deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        'transform': 'rotateY(0deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)'
      });
      $('#box2').css({
        '-webkit-transform': 'rotateY(120deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        '-moz-transform': 'rotateY(120deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        'transform': 'rotateY(120deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)'
      });
      $('#box3').css({
        '-webkit-transform': 'rotateY(240deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        '-moz-transform': 'rotateY(240deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)',
        'transform': 'rotateY(240deg) translateZ(' + (boxWidth / 4) + 'px) translateY(5vh)'
      });
    }

    $('#b1 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(0deg)',
        '-moz-transform': 'rotateY(0deg)',
        'transform': 'rotateY(0deg)',
      });
      angle = 0;
    });
    $('#b2 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(-120deg)',
        '-moz-transform': 'rotateY(-120deg)',
        'transform': 'rotateY(-120deg)'
      });
      angle = -120;
    });
    $('#b3 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(-240deg)',
        '-moz-transform': 'rotateY(-240deg)',
        'transform': 'rotateY(-240deg)'
      });
      angle = -240;
    });
    $('#home').on('swipeleft', function () {
      if (angle <= 0 && angle > -240) {
        angle = angle - 120;
        switch (angle) {
        case -120:
          $('#b2 a').click();
          break;
        case -240:
          $('#b3 a').click();
          break;
        }
      }

    });
    $('#home').on('swiperight', function () {
      if (angle < 0 && angle >= -240) {
        angle = angle + 120;
        switch (angle) {
        case 0:
          $('#b1 a').click();
          break;
        case -120:
          $('#b2 a').click();
          break;
        }
      }

    });
  });
})();