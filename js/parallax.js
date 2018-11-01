// Cube Parallax

$(window).scroll(function() {
  var $windowTop = $(window).scrollTop();
  $('.angular-right').css({top: 130 - ($windowTop / 1.5 /* The Speed */ ) + 'px'});
});

$(window).scroll(function() {
  var $windowTop = $(window).scrollTop();
  $('.angular-content').css({top: 0 - ($windowTop / 4 /* The Speed */ ) + 'px'});
});

$(window).scroll(function() {
  var $windowTop = $(window).scrollTop();
  $('.angular-right-1').css({top: 230 - ($windowTop / 2.5 /* The Speed */ ) + 'px'});
});

$(window).scroll(function() {
  var $windowTop = $(window).scrollTop();
  $('.pull-down-btn').css({marginTop: 455 - ($windowTop / 2.5 /* The Speed */ ) + 'px'});
});


// Parallax Effect
$('div[data-type="background"]').each(function() {
  var $bgobj = $(this); // assigning the object
  var $bgimg = $(this).children('img'); // assigning the object
  var yPos = (($(window).scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));
  $bgobj.css({
    top: yPos + 'px'
  });
  $(window).scroll(function() {
    var yPos = (($(window).scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));
    var yPos2 = ($(window).scrollTop() - $bgobj.offset().top) * ($bgobj.data('speed'));
    // Put together our final background position
    var coords = '50% ' + yPos + 'px';
    // Move the background
    $bgobj.css({
      top: yPos + 'px'
    });
  });
});
