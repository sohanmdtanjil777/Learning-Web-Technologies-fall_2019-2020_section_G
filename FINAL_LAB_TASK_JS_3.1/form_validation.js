
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


	if (name == ""){

		document.getElementById('name_err').innerHTML = "insert your name ";

		return false;
	}

	if (name.length <= 2){

		document.getElementById('name_err').innerHTML = " at least three character ";

		return false;


	}
}