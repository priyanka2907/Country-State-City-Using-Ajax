<?php


 

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Country City State Demo</title>



 
  <script src="jquery.min.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'countryAjaxData.php',
                success:function(html){
                    $('#country').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#country').on('change',function(){//change function on country to display all state 
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                                      }
                   }); 
                      }else{
                           $('#state').html('<option value="">Select country first</option>');
                           $('#city').html('<option value="">Select state first</option>'); 
                           }
    });
    
    $('#state').on('change',function(){//change state to display all city
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                                      }
                   }); 
                    }else{
                          $('#city').html('<option value="">Select state first</option>'); 
                         }
    });
	
	});
	 
				   </script>

</head>
	   <p id="profile1" style="color:red;margin-left:700px;margin-top:100px"><b>Country State City Examples</b></p><br>

                         	 <div class="row">
					 
		
		  <div class="col-md-1 col-sm-12" id="lable1"></div>
                    
					 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">Country</div>
                    <div class="col-md-2">
                     
					<select name="country" id="country"   
 data-live-search="true" class="chosen selectpicker form-control" required>
					<option value="">Select Country</option>
					
                    </select>

                    </div>

		  
					   
					
					
                    <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">State</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="state" id="state"  autofocus="autofocus" required>
                        <option value="">Select an Option</option>                            
                    </select>

                    </div>

                 <div class="col-md-1 col-sm-12" id="lable1"><id="lable1">City</div>
                    <div class="col-md-2">
                    <select class="selectpicker form-control" name="city" id="city" standard title="Select an Option" autofocus="autofocus" required>
                    <option value="">Select an Option</option>
                    </select></div>
					
                  </div>
                    </br>
					</div>
					</div>
                    <!--start 6 row-->
               
