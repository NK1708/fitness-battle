$(document).ready(function(){

  

  $('.city-select').select2({
      dropdownParent: $('.city-select__parent'),
  });
  $('.place-select').select2({
      dropdownParent: $('.place-select__parent'),
  });

  $("#city-select").change(function() {
    $('.place-select option').remove();
    $.ajax({
      type: 'get',
      url: 'query-form.php',
      data: {
        id_city: $(this).val(),
        set_city: 'y'
      },
      dataType: 'json',
      success: function(json) {
        $.each(json['clubs'], function( index, clubs ) {
      
            $('.place-select').append('<option value="'+ index +'">'+ clubs['NAME'] +'</option>');
        
        });
      }
    })
    });

  $("#phone_input").mask("+7 999 999-99-99");

  ajaxForm();
  function ajaxForm() {
      $('#query-form').submit(function(e) {
          $.ajax({
              type: "post",
              url: $(this).attr('action'),
              data: $(this).serialize(),
              dataType: "json",
              beforeSend: function() {
                  $(".form_message").empty();
              },
              success: function(json) {
                  if (json['error']) {
                      $(".form_message").append(json['error']);
                  }
                  if (json['success']) {
                      $('#query-form').trigger('reset');
                      $(".form_message").append(json['success']);
                      var val = text = 'Выберите город';
                      $(".city-select option[value=" + val + "]").attr('selected', 'true').text(text);
                  }
              }
          });
          //отмена действия по умолчанию для кнопки submit
          e.preventDefault();
      });
  }

});

var height = $(window).height();
$(window).on('resize', function(){
   if($(this).height() < height){
      $('.third-block').css('height', height);
      $('.dark').css('height', height);
   }
   if($(this).height() > height){
      $('.third-block').css('height', '100%');
      $('.dark').css('height', '100%');
   }
});