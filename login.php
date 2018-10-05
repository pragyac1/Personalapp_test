<?php include 'header.php';?>
 
<?php include 'innerlogin.php';?>
<?php include 'footer.php';?>
  <script>
$(document).ready(function() {

id_numbers = new Array();
        $.ajax({
            url: "https://domoln.com/fastighet/api/identify.php",
            method: "POST",
            dataType: 'json',
             success: function(result){
                 
                console.log(result);
                
             },
     
             error:function() {
                 alert("Error")                  
             }
        });
    });

</script>

