(function($) {

var tr = $("#second-menu .form-table tr");
var tbody = $("#second-menu .form-table tbody");
var b = 0;
for(var i = 0; i < tr.length; i+=3) {
  b++;
  //b = b % 3;
  if(b > 1){
    tr.slice(i, i+3).wrapAll("<div class='wrap group_"+b+"' data-id='"+b+"'> <a href='#' id='remove_link'>Remove link</a></div>");
  } else {
    tr.slice(i, i+3).wrapAll("<div class='wrap group_"+b+"' data-id='"+b+"'></div>");
  }

}

var group_2 = $('.group_2 .regular-text').val().length;
var group_3 = $('.group_3 .regular-text').val().length;
var group_4 = $('.group_4 .regular-text').val().length;
var group_5 = $('.group_5 .regular-text').val().length;
var group_6 = $('.group_6 .regular-text').val().length;

function hide_group(a, b){
  if(a === 0){
    $(b).hide();
  }
}
hide_group(group_2, '.group_2');
hide_group(group_3, '.group_3');
hide_group(group_4, '.group_4');
hide_group(group_5, '.group_5');
hide_group(group_6, '.group_6');

//$('.group_2, .group_3, .group_4, .group_5, .group_6').hide();

if(b > 1){

}

$(document).on('click','#remove_link', function(e){
 $(this).parent().fadeOut('slow');
 return false;
});

var input = '<input name="link_list" class="button button-primary button-large" id="link_list" value="Add one more link" type="button">';
input += '<input name="remove_link_list" class="button button-primary button-large" id="remove_link_list" value="Remove link" type="button">';
tbody.append(input);

//var count = 1;
$(document).on('click','input#link_list', function(){
  var val = $(this).parent().find('.wrap').last().data('id');
  console.log(val);
  var count =  val + 1;
  $('.group_'+count).fadeIn('slow');
  remove_count = $('.group_'+count).attr('data-id');
});

$('#remove_link_list').on('click', function(e){
  e.stopPropagation();
  $(this).parent().find('.wrap').last()
  .find('#remove_link')
  .trigger('click');
  return false;
});

})( jQuery );
