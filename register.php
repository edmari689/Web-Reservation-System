
<html>
    <head>
	<title> Registration </title>
        <style>
			h3.a1 
            {
                position: absolute;
                left: 55%;
                top: 10%;
                color:#2C3539;
				font-family: century gothic;
				opacity:0;
                
            } 
            h3.a2 
            {
                position: absolute;
                left: 62%;
                top: 10%;
                color:#2C3539;
				font-family: century gothic;
				opacity:0;
            }
            h3.a3 
            {
                position: #2C3539;
                left: 63%;
                top: 10%;
                color:#2C3539;
				font-family: century gothic;
				opacity:0;
            }
            h3.a4 
            {
                position: absolute;
                left: 73%;
                top: 10%;
                color:#2C3539;
				font-family: century gothic;
				opacity:0;
            }

			h3.a6 
            {
                position: absolute;
                left: 89%;
                top: 10%;
                color:#2C3539;
				font-family: century gothic;
				opacity:0;
            }


			h3.a5 
            {
                position: absolute;
                left: 455px;
                top: 59%;
                color:#25383C;
				font-family: candara;
				font-size: 120%;
				
            }
            h3.a7 
            {
                position: absolute;
                right: 590px;
                top: 4%;
                color: #FFFFFF;
                font-family: papyrus;
            }
			table.t1
			{
                position: absolute;
                left: 230px;
                top: 21%;
            }
			
			input{

			-moz-border-radius: 6px;
			border-radius: 6px;
			border:solid 2px black;
			padding: 10px;

			}

			label.sign{
				position:absolute;
				top: 8%;
				left: 230px;
				font-family: calibri;
				color: #000000;
				font-size: 500%;
			}
        </style>
		<script>
			function validateForm(form)
			{
				
				var sex = document.getElementById("sex").value;
				
					if (form.name.value == "") {
						alert ("No name was entered");
						return false;
					}
					if (form.company_name.value == "") {
						alert ("No Company Name was entered");
						return false;
					}
					if (form.company_address.value == "") {
						alert ("No Company Address was entered");
						return false;
					}
					if (form.contact.value == "") {
						alert ("No Contact was entered");
						return false;
					}
					if (form.contact.value.match(/[^0-9]/)) {
						alert ("Numeric characters only!");
						return false;
					}
					if(form.email.value == "") {
						alert ("No email address was entered ");
						return false;
					}
					if (form.user.value == "") {
						alert ("No Username was entered");
						return false;
					}
					if (form.user.value.length < 5) {
						alert ("Username must be at least 5 characters.\n");
						return false;
					}
					if (form.pass.value == "") {
						alert ("No Password was entered");
						return false;
					}
					if (form.pass.value.length < 6) {
						alert ("Password must be atleast 6 characters");
						return false;
					}
					else
					{
						alert("Please wait for your confirmation that will be sent by the admin to your email to validate your information or contact them. Thank you!");
					
					}
			}
		</script>
    </head>
	<body background="skybird.jpg">
		<div id="header" style="height:10px;"></div>		
		
		<div id="menu" style="height:600px;">
		
		<label class = "sign"> Sign Up </label>
		<form  action="addRegistration.php" onsubmit="return validateForm(this)" method = "POST">
			<table class="t1" border="0" style="width:500px;">
				<tr>					
					<td> Full Name
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri"></font></label><br>
						<input type="text" name="name" id="name" style="width: 260px;" onfocus="if(this.value=='Full name') this.value='';">
					</td>
				</tr>
				<tr>					
					<td> Name of Company
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri"></font></label><br>
						<input type="text" name="company_name" id="company" style="width: 260px;" onfocus="if(this.value=='Company name') this.value='';">
					</td>
				</tr>
				<tr>					
					<td> Address of Company
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri"></font></label><br>
						<input type="text" name="company_address" id="company_address" style="width: 260px;" onfocus="if(this.value=='Company Address') this.value='';">
					</td>
				</tr>
				<tr>					
					<td> Contact Number
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri"> </font></label><br>
						<input type="text" name="contact" id="contact" style="width: 260px;" onfocus="if(this.value=='Contact number') this.value='';">
					</td>
				</tr>
				<tr>
					<td>						
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri">Sex: </font></label><br>
						<input type="radio" name="sex" id="sex" value="male"/> Male
						<input type="radio" name="sex" id="sex" value="female"/> Female						
					</td>
				</tr>
				<tr>
					<td>						
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri">Email Address: </font></label><br>						
						<input type="text" name="email" id="email" style="width: 260px;">	
					</td>
				</tr>
				<tr>
					<td>						
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri">Username: </font></label><br>						
						<input type="text" name="user" id="user"style="width: 260px;">	
					</td>
				</tr>
				<tr>
					<td>
						
						<label><font color = "#000000" style="font-size: 19px; font-family:calibri">password: </font></label><br>
						<input type="password" name="pass" id="pass" style="width:198px"> <input type = "reset" value="Reset" />						
					</td>
				</tr>
				<tr>
					<td>			
						<input type = "submit" name ="register" value="Create my account" style="width:260px; background-color: #347C2C; color: #FFFFFF; font-family: calibri; font-size: 130%" /><br>
						<a href = "homepage.php"><u> Back to Home </u></a>					
					</td>
				</tr>
			</table>
		</form>
		</div> 
	</body>
</html>
