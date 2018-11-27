
<html>

	<head>
	
	</head>
	<body>
	
	<h1>heading will always break line	</h1>
	<p>........ para lines are broken like this </br>	</p>
	

		<input id="firstNum" type"firstNum">
	<input id="secondNum" type"secondNum">

	<button id = " Add" type="button" onclick="myFunction()">add this</button>
	


	<script>
	var firstNum =54;
	var secondNum=0;
	var total = firstNum + secondNum;
	
   function myFunction() {
    return firstNum + secondNum;
}
	
	document.getElementById('Add').innerHTML=firstNum + secondNum;
	
	</script>
	</body>
	<html>
