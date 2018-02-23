(function($){

  $('.main-navigation .search-submit').on('click', function(evt){
    evt.preventDefault();

    $('.main-navigation .search-field').focus();

  });

  $('.main-navigation .search-field').on('blur', function(){

    alert('dhelaidw');  

  });


}(jQuery));