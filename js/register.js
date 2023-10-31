function registration()
	{
        var uName= document.getElementById("detail0").value;
		var fName= document.getElementById("detail1").value;
        var lName= document.getElementById("detail2").value;
        var tital= document.getElementById("detail3").value;
        var cName= document.getElementById("detail4").value;
        var cNum= document.getElementById("detail5").value;
        var dirContNum= document.getElementById("detail6").value;
		var email= document.getElementById("detail7").value;
		var pwd= document.getElementById("detail8").value;			
		var cpwd= document.getElementById("detail9").value;
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var numbers = /^[0-9]+$/;

        if(uName=='')
		{
			alert('Please enter the user name.');
		}
		else if(!letters.test(uName))
		{
			alert('User name field required only alphabet characters');
		}
		else if(fName=='')
		{
			alert('Please enter your first name');
		}
		else if(!letters.test(fName))
		{
			alert('Name field required only alphabet characters');
		}
        else if(lName=='')
		{
			alert('Please enter last your name');
		}
		else if(!letters.test(lName))
		{
			alert('Name field required only alphabet characters');
		}
        else if(tital=='')
		{
			alert('Please enter your first name');
		}
		else if(!letters.test(tital))
		{
			alert('Name field required only alphabet characters');
		}
        else if(cName=='')
		{
			alert('Please enter your first name');
		}
		else if(!letters.test(cName))
		{
			alert('Name field required only alphabet characters');
		}
        else if(cNum=='')
		{
			alert('Please enter your first name');
		}
		else if(!numbers.test(cNum))
		{
			alert('Name field required only numaric characters');
		}
        else if(dirContNum=='')
		{
			alert('Please enter your first name');
		}
		else if(!numbers.test(dirContNum))
		{
			alert('Name field required only numaric characters');
		}
        else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		else if(pwd=='')
		{
			alert('Please enter Password');
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
		}
		else if(document.getElementById("detail8").value.length < 6)
		{
			alert ('Password minimum length is 6');
		}
		else if(document.getElementById("detail8").value.length > 12)
		{
			alert ('Password max length is 12');
		}
		else
		{				                            
               alert('Registration Succsessful & You are Redirecting to your profile.'); 
		}
	}

// Student name: Thathsara S.M.K. 
// Student ID: IT21219566 
// Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)