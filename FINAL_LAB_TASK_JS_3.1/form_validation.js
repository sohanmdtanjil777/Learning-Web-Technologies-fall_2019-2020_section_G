
function formValidation(){



	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var male = document.getElementById('male').value;
	var female = document.getElementById('female').value;
	var other = document.getElementById('other').value;
	var day = document.getElementById('day').value;
	var month = document.getElementById('month').value;
	var year = document.getElementById('year').value;
	var bloodGroup = document.getElementById('bloodGroup').value;
	var ssc = document.getElementById('ssc').value;
	var hsc = document.getElementById('hsc').value;
	var bsc = document.getElementById('bsc').value;



	if (name == ""){

		var name_err = "error";

		document.getElementById('name_err').innerHTML = "insert your name ";

		return false;
	}

	if (name.length <= 2){

		name_err = "error"

		document.getElementById('name_err').innerHTML = " at least three character ";

		return false;


	}

	if (email == ""){

		var email_err = "error";

		document.getElementById('email_err').innerHTML = "Give your email address ";

		return false;
	}

	if (male == "" && female == "" && other == ""){

		var gender_err = "error";

		document.getElementById('gender_err').innerHTML = "select your gender";

		return false;
	}


}