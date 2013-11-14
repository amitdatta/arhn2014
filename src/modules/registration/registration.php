<?php
	include('../../connections/dbconnect.php');
?>
<title>Registration | Website</title>
<script src='../../js/jquery-1.10.2.min.js'></script>
<link href='../../templates/base.css' rel='stylesheet' />
<link href='../../templates/registration.css' rel='stylesheet' />
<script>
	function validateEmail(emailID) {
	    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    	return re.test(emailID);
	} 
	function validateFormData() {
		var errCount = 0;
		var email = '';
		var data = $('#registrationForm').serialize();
		var sets = data.split('&');
		for(var i=0;i<sets.length;i++) {
			var input = sets[i].split('=');
			var errorno = '#error'+i;
			if(i==3) 
				email = input[1];
			if(input[1]=='') {
				$(errorno).text('** This field cannot be left empty');
				errCount++;
			}
			else
				$(errorno).text('');
		}
		email = email.replace('%40','@');
		if(!validateEmail(email)) {
			$('#error3').text('** Please enter a valid email ID.');
			errCount++;
		}
		else
			$('#error3').text('');
		if(errCount==0)
			$('#registrationForm').submit();
	}
</script>
<div class='registration-form'>
	<form method='post' action='registration-process.php' id='registrationForm'>
		<input type='text' name='name' placeholder='Your name' />
		<div class='error' id='error0'></div>
		<input type='text' name='college' placeholder='Your college/school' />
		<div class='error' id='error1'></div>
		<input type='text' name='phone' placeholder='Your phone number' id='form-phone' maxlength='10' />
		<div class='error' id='error2'></div>
		<input type='text' name='email' placeholder='Your email-ID' />
		<div class='error' id='error3'></div>
		<div class='label'>What branch are you pursuing?</div>
		<div id='branch-select'>
			<select name='branch' id='branch'>
				<?php
					$query = mysql_query('SELECT * FROM branch');
					while($row = mysql_fetch_array($query)) {
						echo '<option value="'.$row['id'].'" ';
						if($row['id']=='1')
							echo 'selected="selected"';
						echo '>'.$row['name'].'</option>';
					}
				?>
				<option value='Other'>Other</option>
			</select>
		</div>
		<div class='info'>By registering you guarantee that all the information given here are correct and up-to date to the best of your knowledge.</div>
		<input type='button' value='Register' onclick='validateFormData()' />
	</form>
</div>
<script>
	$('#form-phone').keyup(function(){
		this.value = this.value.replace(/[^0-9]/g,'');
	});
	$('#branch').change(function() {
		var current = $(this).find("option:selected").val();
		if(current == 'Other')
			$('#branch-select').append('<input type="text" id="newbranch" name="newbranch" placeholder="Your branch" /><div class="error" id="error5"></div>');
		else
			$('#newbranch').remove();
	});
</script>