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

<form  id="myform" name="member_signup">
    Select image to upload:
    <input type="hidden" id="tt" name="hi" value="eeqweqw">
    <input type="" id="sign" name="signature">
    <label>First Name:</label>
    <input type="text" name="fistname">
    <label>Last Name:</label>
    <input type="text" name="lastname">
    <label>Club#:</label>
    <input type="text" name="club_id">
    <input type="submit" id="submit" value="Upload Image" name="submit">
</form>
<script>
$(document).ready(function(){


  $('#myform').submit(function(e){
    e.preventDefault();
    var dataString = $("#myform").serialize();
   $.ajax({
      type: "POST",
      url: "/php/test1.php",
      data: {'string':dataString},
      success: function(html)
      {
        $('#sign').val(html);
        $('#myform').off();
        $('#submit').click();
      }


    });
  });
  








});
</script>
</body>


</html>