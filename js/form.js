$(function () {
  $('#wizard').steps({
    headerTag: 'h4',
    bodyTag: 'section',
    transitionEffect: 'fade',
    enableAllSteps: true,
    transitionEffectSpeed: 300,
    labels: {
      next: 'Continue',
      previous: 'Back',
      finish: 'Enviar',
    },
    onStepChanging: function (event, currentIndex, newIndex) {
      if (newIndex >= 1) {
        $('.steps ul li:first-child a img').attr('src', 'images/carpeta1.png');
      } else {
        $('.steps ul li:first-child a img').attr('src', 'images/carpeta.png');
      }

      if (newIndex === 1) {
        $('.steps ul li:nth-child(2) a img').attr(
          'src',
          'images/smartphone.png'
        );
      } else {
        $('.steps ul li:nth-child(2) a img').attr('src', 'images/iphone.png');
      }

      return true;
    },
  });
  // Custom Button Jquery Steps
  $('.forward').click(function () {
    $('#wizard').steps('next');
  });
  $('.backward').click(function () {
    $('#wizard').steps('previous');
  });
  // Click to see password
  $('.password i').click(function () {
    if ($('.password input').attr('type') === 'password') {
      $(this).next().attr('type', 'text');
    } else {
      $('.password input').attr('type', 'password');
    }
  });
  // Create Steps Image
  $('.steps ul li:first-child')
    .append('<img src="images/step-arrow.png" alt="" class="step-arrow">')
    .find('a')
    .append('<img src="images/carpeta.png" alt=""> ')
    .append('<span class="step-order">Step 01</span>');
  $('.steps ul li:nth-child(2')
    .append('<img src="images/step-arrow.png" alt="" class="step-arrow">')
    .find('a')
    .append('<img src="images/iphone.png" alt="">')
    .append('<span class="step-order">Step 02</span>');

  // Count input
  $('.quantity span').on('click', function () {
    var $button = $(this);
    var oldValue = $button.parent().find('input').val();

    if ($button.hasClass('plus')) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find('input').val(newVal);
  });
});

function ventanaSecundaria(URL) {
  window.open(
    URL,
    'ventana1',
    'width=600,height=300,left=190,top=200,scrollbars=NO'
  );
}
