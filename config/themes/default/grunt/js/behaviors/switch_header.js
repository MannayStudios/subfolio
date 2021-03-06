/* Show/Hide the header + cookie
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/
A17.Behaviors.switch_header = function($homeSwitch) {
  var $body = $('body');
  var $header = $('.header__logo');
  var klass_hide = "header__hide";
  var collapse_header_label = 'collapse header';
  var expand_header_label = 'expand header';

  $homeSwitch.click(function(e) {
    e.preventDefault();

    if ($body.hasClass(klass_hide)) {
      $body.removeClass(klass_hide);
      $header.css('margin-top', "");
      A17.Util.create_cookie('header', "header__show");
    } else {
      $body.addClass(klass_hide);
      $header.css('margin-top', "-" + $header.data('height'));
      A17.Util.create_cookie('header', klass_hide);
    }
  });
}