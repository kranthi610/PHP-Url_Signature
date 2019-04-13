<?php

if( isset($_GET['submit'] ) ){
    print_r($_GET);
}

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

<form  id="myform">
    <input type="" id="sign" name="signature">
    <label>First Name:</label>
    <input type="text" name="fistname">
    <label>Last Name:</label>
    <input type="text" name="lastname">
    <input type="submit" id="submit" name="submit">
</form>
<script>
$(document).ready(function(){
    
  $('#myform').submit(function(e){
    //prevent default submit action
    e.preventDefault();
    //get form input values
    var dataString = $("#myform").serialize();
   $.ajax({
      type: "POST",
      url: "/php/signature.php",
      data: {'string':dataString},
      success: function(html)
      {
        //attach the signatue to input value
        $('#sign').val(html);
          //unbind all events attached tot he form
        $('#myform').off();
        //click the submit button to submit form
        $('#submit').click();
      }


    });
  });

});
</script>
</body>


</html>
