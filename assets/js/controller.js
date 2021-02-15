$(function () {
    console.log( "DOM ready!" );
    $('form').on( 'submit' , validateForm );
    $('form > input').keyup(function() {

        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (!empty) {
            $('#register').removeAttr('disabled');
        }
    });
    
   });

function validateForm ( event ) {
    var valid=true;
    var query = $('[name=query_str]').val();
    if (query.length <2 || query.length > 20) {
        valid=false;
        $('#errMessage').text("Length must be from 2 to 20").hide();
        $('#errMessage').fadeIn("slow");
        setTimeout(function() { $( '#errMessage' ).fadeOut( "slow" ); }, 2000);
           return valid;
          }
   }
   function ddd ( ) {
    $( "#dialog-confirm" ).dialog({
        modal: true,
        buttons: {
          "Send data": function() {
              $( this ).load("@Url.Action('<?php echo form_open('user/login'); ?>')");
          },
          Cancel: function() {
              $( this ).dialog( "close" );
          }
        }
      });
   }