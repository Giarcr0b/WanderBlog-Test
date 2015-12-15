//this script will give a message if the data is succesfully sent
$('form').submit(function() {
	var userId = $("#userID").val();
	var user = $("#username").val();
	var name = $("#name").val();
	var selAut = $("#selectAuthor option:selected").val();
	var selAdm = $("#selectAdmin option:selected").val();
	var selVer = $("#selectVerified option:selected").val();
	$.ajax({
		url : 'php/updateUser.php',
		type: "POST",
		data : {
			userid: userId,
			username: user,
			name: name,
			isAuthor: selAut,
			isAdmin: selAdm,
			isVerified: selVer
		    	},
		success: function(data) {
			$('#feedback').html(data);
			window.location.href = "http://cosawanderblog.azurewebsites.net/admin/users/";
		}
	});
	return false
});
