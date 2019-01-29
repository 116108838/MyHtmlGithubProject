
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Working with HTML Forms</title>
    <meta name="viewport" content="width=device-width">
    <style>
        *,
        *::after,
        *:before{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            font:normal 20px/1.5 sans-serif;
        }
        h1{
            margin: 1rem 2rem;
        }
        form{
            margin: 2rem;
            width: 800px;
        }
        .form-box{
            padding: 1rem;
            clear: both;
            width: 100%;
            position: relative;
        }
        .form-box label{
            font-size: 1rem;
            float: left;
            width: 100px;
            margin-right: 20px;
        }
        .form-box input{
            font-size: 1rem;
            width: 300px;
            padding: 0.25rem 1rem;
        }
        .form-box select{
            font-size: 1rem;
            width: 300px;
            padding: 0.25rem 1rem;
        }
        .form-box option{
            font-size: 1rem;
            width: 300px;
            padding: 0.25rem 1rem;
        }
        .form-box input[type="checkbox"]{
            font-size: 1rem;
        }
        .form-box button{
            font-size: 1rem;
            border: none;
            padding: 0.25rem 2rem;
            margin-right: 1rem;
            color: white;
            background-color: cornflowerblue;
            cursor: pointer;
        }
        
        .error::after{
            background-color: hsl(10, 60%, 50%);
            color: papayawhip;
            font-size: 1rem;
            line-height: 1.8;
            width: 350px;
            padding-left: 1rem;
            position:absolute;
            right: 0;
            content: attr(data-errormsg);
        }
    </style>
</head>
<body>
    <h1>JavaScript and HTML Forms</h1>
    
    <form id="form-user" action="#" method="post">
        <div class="form-box error" data-errormsg="">
            <label for="input-first">Full Name</label>
            <input type="text" id="input-first" autofocus placeholder="First Name" tabindex="1"/>
        </div>
        <div class="form-box" data-errormsg="">
            <label for="input-password">Password</label>
            <input type="password" id="input-password" required placeholder="Password" tabindex="2" />
        </div>
        <div class="form-box" data-errormsg="">
            <label for="input-email">E-mail Address</label>
            <input type="email" id="input-email" required placeholder="E-mail Address" tabindex="3" />
        </div>
        <div class="form-box" data-errormsg="">
            <label for="input-age">Age</label>
            <select id="input-age" tabindex="4">
                <option value="0">Under 18</option>
                <option value="1">20-30</option>
                <option value="2">30-40</option>
                <option value="3">40-50</option>
                <option value="4">Over 50</option>
            </select>
        </div>
        <div class="form-box" data-errormsg="">
            <label for="input-alive">Alive?</label>
            <input type="checkbox" id="input-alive" value="yes" tabindex="5" checked />
        </div>
        <div class="form-box">
            <button id="button-cancel">Cancel</button>
            <button id="button-send">Send</button>
        </div>
    </form>
    
    <script src="./forms.js"></script>
</body>
</html><html>

	<head>
	
	</head>
	<body>
	
	<h1>heading will always break line	</h1>
	<p>........ para lines are broken like 	</p>
	

		<input id="firstNum" type"firstNum">
	<input id="secondNum" type"secondNum">

	<button id = " Add" type="button" onclick="myFunction()">add that shit </button>
	


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
