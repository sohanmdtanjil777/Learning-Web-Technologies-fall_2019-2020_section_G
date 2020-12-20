function registerValidation(){



	var name = document.getElementById('name').value.trim();
	var contact = document.getElementById('contact').value.trim();
	var uname = document.getElementById('uname').value.trim();
	var password = document.getElementById('password').value.trim();
	
	


   var name_flag = "";
   var contact_flag = "";
   var uname_flag = "";
   var pass_flag = "";
  
   
   
   
	if (name == ""){

	   

		document.getElementById('name_err').innerHTML = "insert your name ";

		name_flag = "error";

	   

	}

	

	if (name != ""){


		if (!(name[0].toLowerCase() >='a' && name[0].toLowerCase() <='z')){

          

		  document.getElementById('name_err').innerHTML = "name must be start with a letter";
      name_flag = "error";
	      

		}
	}

  

   if (name != ""){

   var count = 0;
   var i=0;

   while (i < name.length){

        if ((name[i] >='0') && (name[i] <='9')){

   		count++;
   	}
   	i++
   }

   if (count != 0){

   	     

		document.getElementById('name_err').innerHTML = " only character ";

		name_flag = "error";

   }

   }

  
   if (name != ""){

        var dup = name.replace(/ /g, "");

        var doubleDot = dup.indexOf("..");
        var doubleDash = dup.indexOf("--");

        if (doubleDot >= 0){

        	

		 document.getElementById('name_err').innerHTML = "name cannot contain Double Dot (..) or more";
       
       name_flag = "error";
		 

        }else if (doubleDash >= 0){

          

		  document.getElementById('name_err').innerHTML = "name cannot contain Double dash (--) or more";

		  name_flag = "error";

        }


   }

   

   if(name != ""){
     
     var alphaCount = 0;
     var j = 0;

    var rpName = name.replace(/ |-/g,'');
    var dtName = rpName.replace(/\./g,'');

     while (j < dtName.length){

        if (!(dtName[j].toLowerCase() >='a' && dtName[j].toLowerCase() <='z')) {

   		  alphaCount++;

   	}

   	j++

   }

   if (alphaCount != 0){

   	     

		document.getElementById('name_err').innerHTML = " name only contain A to Z or a to z ";

		name_flag = "error";

   }


   }

  

   if (name != ""){

  if (name.split(" ").length < 2){

		

		document.getElementById('name_err').innerHTML = "name must be at least two words";

		name_flag = "error";


	}

	}

  
	
  if (name_flag == ""){

         var obj = document.getElementById('name_err').innerHTML = "";

         //return false;


    }

	

   

	if (contact == ""){

	     

		document.getElementById('contact_err').innerHTML = "Give your contact no ";

		contact_flag = "error";

		//return false;
	}



	

	if(contact != ""){
     
     var aCount = 0;
     var j = 0;

    var rpCon = name.replace(/ |-/g,'');
    var dtCon = rpName.replace(/\./g,'');

     while (j < dtCon.length){

        if (!(dtCon[j].toLowerCase() >='a' && dt[j].toLowerCase() <='z')) {

        alphaCount++;

    }

    j++

   }

   if (aCount != 0){

         

    document.getElementById('contact_err').innerHTML = " contact only contain numbers ";

    contact_flag = "error";

   }


   }

	

	
	

  
  
  

  

	if(){

      
        return false;


	}else{

           sendToPhp();
           return true;

	}





}