//this script will give a message if the data is succesfully sent
$('form').submit(function() {
	var user = $("#username").val();
	var pass = $("#password").val();
	var repass = $("#repassword").val();
	$.ajax({
		url : 'php/register.php',
		type: "POST",
		data : {
			username: user,
			password: pass,
			repassword: repass
		    	},
		success: function(data) {

			switch(data){

				case "EmptyField":
					$('#feedback').html("One or more fields is empty");
					if($('#username').val().length == 0){
						$('#username').css({"border-color": "red"})
					}
					if($('#password').val().length == 0){
						$('#password').css({"border-color": "red"})
					}
					if($('#repassword').val().length == 0){
						$('#repassword').css({"border-color": "red"})
					}
					break;

				case "UserExists":
					$('#feedback').html("User already exists");
					break;

				case "PassSame":
					$('#feedback').html("Passwords are not the same, Please re-enter");
					$('#password').css({"border-color": "red"})
					$('#repassword').css({"border-color": "red"})
					break;

				case "PassLen":
					$('#feedback').html("Passwords minimum length is 8 characters, Please re-enter");
					$('#password').css({"border-color": "red"})
					$('#repassword').css({"border-color": "red"})
					break;

				case "UserCreated":
					//Hide all of the form elements
					$('#formReg').children().hide();

					//Set the text of the feeback div and show it
					$('#feedback').html("<h2>User Created, Please wait to be verified</h2>").show();
					break;

				case "UserNotCreated":
					$('#feedback').html("Something went wrong, User not created");
					break;

				default:
					$('#feedback').html(data);

			}
		}
	});
	return false
});
