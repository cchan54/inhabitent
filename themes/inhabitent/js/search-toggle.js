(function ($) {
  $('.main-navigation .search-field').hide();

  $('.main-navigation .search-toggle').on('click', function (evt) {
    evt.preventDefault();

    $('.main-navigation .search-field').show('fast');
    $('.main-navigation .search-field').focus();

  });

  $('.main-navigation .search-field').on('blur', function () {

    $('.main-navigation .search-field').hide('fast');
  });

  $('.search-field').keydown(function () {
    $('.search-field').submit();
  })

}(jQuery));