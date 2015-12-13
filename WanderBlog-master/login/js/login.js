//this script will give a message if the data is succesfully sent
$('form').submit(function() {
	var user = $("#username").val();
	var pass = $("#password").val();
	$.ajax({
		url : 'php/login.php',
		type: "POST",
		data : {
			username: user,
			password: pass
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
					break;

				case "UserExistsPass":
					$('#feedback').html("Username doesn't exist, or the username or password is incorrect");
					break;

				case "NotVerified":
					$('#feedback').html("You are not verified yet");
					break;

				case "LoggedIn":
					window.location.href = "http://cosawanderblog.azurewebsites.net";
					break;

				default:
					$('#feedback').html(data);

			}
		}
	});
	return false
});
