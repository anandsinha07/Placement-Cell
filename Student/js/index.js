
function validate()
{ 
   if( document.StudentRegistration.studentname.value == "" )
   {
     alert( "Please provide your Name!" );
     document.StudentRegistration.studentname.focus() ;
     return false;
   }
   if( document.StudentRegistration.fathername.value == "" )
   {
     alert( "Please provide your Father's Name!" );
     document.StudentRegistration.fathername.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.mothername.value == "" )
   {
     alert( "Please provide your Mother's Name!" );
     document.StudentRegistration.mothername.focus() ;
     return false;
   }
   if( document.StudentRegistration.address.value == "" )
   {
     alert( "Please provide your Address!" );
     document.StudentRegistration.address.focus() ;
     return false;
   }
   if ( ( StudentRegistration.gender[0].checked == false ) && ( StudentRegistration.gender[1].checked == false ) )
   {
   alert ( "Please choose your Gender:" );
   return false;
   }   
   if( document.StudentRegistration.rollno.value == "" ||
isNaN( document.StudentRegistration.rollno.value))
   {
     alert( "Please provide your Roll no!" );
     document.StudentRegistration.rollno.focus() ;
     return false;
   }
   if( document.StudentRegistration.division.value == "" )
   {
     alert( "Please provide your Division!" );
     document.StudentRegistration.division.focus() ;
     return false;
   }
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
  if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please provide a valid Mobile No." );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }
if(document.StudentRegistration.percentage.value == "" ||
isNaN( document.StudentRegistration.percentage.value))
{
alert(" Please provide a valid Percentage!");
document.StudentRegistration.percentage.focus();
return false;
}
   return( true );
}
