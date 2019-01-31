@extends('layouts.app')
@section('content')
        <form id="frmData" onsubmit="return false">
        <input type="email" id="txtEmail" name="input_email" required="" placeholder="Enter a valid e-mail" spellcheck="false"/>
        <input type="tel" id="txtTel" name="input_tel" required="" placeholder="Enter your telephone number" spellcheck="false"/>
        <input type="submit" id="btnSubmit" value="Send Info"/>
       </form>

       <script type="text/javascript">
         $(document).ready(function(){
           $('#btnSubmit').click(function() {
               var tel = $("#txtTel").val();
               var email = $("#txtEmail").val();

                        $.post("scripts/contact.php", {
                            tel1: tel,
                            email1: email
                        })
                     .done(function(data) {
                         $('#lblEstatus').append(data); // Appends status
                         if (data == "Received") {
                             $("#btnSubmit").attr('disabled', 'disabled'); // Disable doubleclickers.
                         }
                     })
                 .fail(function(xhr, textStatus, errorThrown) { 
                     $('#lblEstatus').append("Error. Try later."); 
                 });
            });
          }); 
       </script>
@endsection