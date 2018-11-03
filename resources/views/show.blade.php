<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>NASA NEO</title> 
<meta name="description" content="Twitter Bootstrap Version2.0 default form layout example from w3resource.com."> 
<link href="twitter-bootstrap-v2/docs/assets/css/bootstrap.css" rel="stylesheet">
<link href="{{ URL::asset('css/base1.css') }}" rel="stylesheet">
</head>
<body>
<form class="well" id="api_form">
  <label>Start Date</label>
  <input type="text" class="span3" placeholder="start date" id="sdate">
  <span id="sdate_error" class="errorclass"> Please enter/select start date</span>
  <label>End Date</label>
  <input type="text" class="span3" placeholder="end date" id="edate">
  <span id="edate_error"class="errorclass"> Please enter/select end date</span>
  <button type="submit" class="btn">Submit</button>
</form>



<div id="returnObject"></div>
</body>
</html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head>

</head>
 
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#sdate').datepicker({
                    format: "yyyy-mm-dd"
                });  
				 $('#edate').datepicker({
                    format: "yyyy-mm-dd"
                });  
				
				    $('#sdate').datepicker({
					autoclose: true,  
					format: "yyyy-mm-dd"
					}); 
               $('#edate').datepicker({
				autoclose: true,  
				format: "yyyy-mm-dd"
				}); 
            
            });
        </script>

 
<script>
$("form#api_form").submit(function (e){
e.preventDefault();
var start_date = $('#sdate').val();
var end_date = $('#edate').val();
$("#sdate_error").hide();
$("#edate_error").hide();
if(start_date==''){
	$("#sdate_error").show();
	return false;
}
if(end_date==''){
	$("#edate_error").show();
	return false;
}
//var api_url = '{{url("https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=DEMO_KEY ")}}';
  $.ajax({
  url:"https://api.nasa.gov/neo/rest/v1/feed?start_date="+start_date+"&end_date="+end_date+"&api_key=73J7gYNAI7lr8NG6rQluSzHl5U6oxP1wq5ht4nZ1",
  type: "GET",
  processData: false,
  contentType : false,
  error: function() {
  console.log("error");
  },
  success: function(data) {
	 
	 alert(data.near_earth_objects);
	for (var i = 0; i < data.start_date.length; i++) {
    var id = data.start_date[i].id;
	}
	 
	}
});
});
 
</script> 