(function () {
  $(document).on('pageshow', '#home', function () {
    var angle = 0;
    _swipe();
    $(window).resize(_swipe);

    function _swipe() {
      var boxWidth = $('#box').width();
      $('#box1').css({
        '-webkit-transform': 'rotateY(0deg) translateZ(' + (boxWidth / 2) + 'px)',
        '-moz-transform': 'rotateY(0deg) translateZ(' + (boxWidth / 2) + 'px)',
        'transform': 'rotateY(0deg) translateZ(' + (boxWidth / 2) + 'px)'
      });
      $('#box2').css({
        '-webkit-transform': 'rotateY(90deg) translateZ(' + (boxWidth / 2) + 'px)',
        '-moz-transform': 'rotateY(90deg) translateZ(' + (boxWidth / 2) + 'px)',
        'transform': 'rotateY(90deg) translateZ(' + (boxWidth / 2) + 'px)'
      });
      $('#box3').css({
        '-webkit-transform': 'rotateY(180deg) translateZ(' + (boxWidth / 2) + 'px)',
        '-moz-transform': 'rotateY(180deg) translateZ(' + (boxWidth / 2) + 'px)',
        'transform': 'rotateY(180deg) translateZ(' + (boxWidth / 2) + 'px)'
      });
      $('#box4').css({
        '-webkit-transform': 'rotateY(270deg) translateZ(' + (boxWidth / 2) + 'px)',
        '-moz-transform': 'rotateY(270deg) translateZ(' + (boxWidth / 2) + 'px)',
        'transform': 'rotateY(270deg) translateZ(' + (boxWidth / 2) + 'px)'
      });
    }

    $('#b1 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(0deg)',
        '-moz-transform': 'rotateY(0deg)',
        'transform': 'rotateY(0deg)'
      });
      angle = 0;
    });
    $('#b2 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(-90deg)',
        '-moz-transform': 'rotateY(-90deg)',
        'transform': 'rotateY(-90deg)'
      });
      angle = -90;
    });
    $('#b3 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(-180deg)',
        '-moz-transform': 'rotateY(-180deg)',
        'transform': 'rotateY(-180deg)'
      });
      angle = -180;
    });
    $('#b4 a').on('click', function () {
      $('#box').css({
        '-webkit-transform': 'rotateY(-270deg)',
        '-moz-transform': 'rotateY(-270deg)',
        'transform': 'rotateY(-270deg)'
      });
      angle = -270;
    });
    $('#home').on('swipeleft', function () {
      if (angle <= 0 && angle > -270) {
        angle = angle - 90;
        switch (angle) {
        case -90:
          $('#b2 a').click();
          break;
        case -180:
          $('#b3 a').click();
          break;
        case -270:
          $('#b4 a').click();
          break;
        }
      }
    });
    $('#home').on('swiperight', function () {
      if (angle < 0 && angle >= -270) {
        angle = angle + 90;
        switch (angle) {
        case 0:
          $('#b1 a').click();
          break;
        case -90:
          $('#b2 a').click();
          break;
        case -180:
          $('#b3 a').click();
          break;
        }
      }
    });
  });
})();