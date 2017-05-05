<html>
<head>
	<title> Example</title>
	<script type="text/javascript" src="./jquery-2.2.0.js"></script>
	<script type="text/javascript" language="javascript">
	  $(document).ready(function(){
		$("#driver").click(function(event){
			$.post(
			"serialize.php", 
			$("#testform").serializeArray();
			function(data){
			$('#stage1').html(data);
			}
			);
			var fields = $("#testform").serializeArray();
			$("#stage2").empty();
			jQuery.each(fields, function(i, field){
			$("#stage2").append(field.value + " ");
			});
	/* this is for parsing input
			var name = $("#name").val();
				$('#stage').load('result.php', {"name":name} );
					var age = $("#age").val();
		*/
			});
		});
	</script>
</head>
<body>
<!-- ini pasangan parshing
	<p>Enter your name and click on the button</p>
	<label>Nama</label>
	<input type="input" id="name" size="40"/><br/>
	<label>Age</label>
	<input type="input" id="age" size="40"/><br/>
	<label>Sex</label>
	<input type="input" id="sex" size="40"/><br/>
	-->
	<div id="stage1" style="background-color:blue;">
		Stage 1
	</div>
	<div id="stage2" style="background-color:brown;">
		Stage 2
	</div>
	<form id="testform">
	<label>Nama</label>
	<input type="input" name="name" size="40"/><br/>
	<label>Age</label>
	<input type="input" name="age" size="40"/><br/>
	<label>Sex</label>
	<select name="sex">
		<option value="Male" selected>Male</option>
		<option value="Female" selected>Female</option>
	</select>
	
	<input type="button" id="driver" value="Show REsult"/><br/>
	</form>
</body>
</html>


<!-- This id for access json

<html>
<head>
	<title> Example</title>
	<script type="text/javascript" src="./jquery-2.2.0.js"></script>
	<script type="text/javascript" language="javascript">
	  $(document).ready(function(){
		//$("#driver").click(function(event){
		//$('#stage').load('result.html');
			//});
		//});
		$("#driver").click(function(event){
			$.getJSON('result.json', function(jd) {
				$('#stage').html('<p> Name: ' + jd.name + '</p>');
				$('#stage').append('<p> Age : ' + jd.age + '</p>');
				$('#stage').append('<p> Sex : ' + jd.sex + '</p>');
			});
			});
		});
	</script>
</head>
<body>
	<h1>Hello</h1>
	<p>Click on the cutton to load result.html file:
	</p>
	<div id="stage" style="background-color:blue;">
		Stage
	</div>
	<input type="button" id="driver" value="load data"/>
</body>
</html>-->