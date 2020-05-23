jQuery( document ).ready( function($) {
	/* check #registerUser is availble or not  */  
	if ($("#registerUser").length > 0) {

        /*Jquery Validation*/
        $("#registerUser").validate({ 

            /*submitHandler : this is submit form action */
            submitHandler : function(form) {
               var firstname = $("#firstname").val();
               var lastName = $("#lastName").val();
               var mobileNumber = $("#mobileNumber").val();
               var regemailID = $("#regemailID").val();
               var regpassword = $("#regpassword").val();

               var data = {
                    'action': 'success_register',
                    'username': firstname,
                    'password': regpassword,
                    'firstname': firstname,
                    'lastname': lastName,
                    'mobileNumber': mobileNumber,
                    'email': regemailID,
                };
                var ajaxurl = screenReaderText.aJaxAdmin;        
                jQuery.post(ajaxurl, data, function(responseCool) {
                    if(responseCool == 'success'){
                        $("#firstname").val('');
                        $("#lastName").val('');
                        $("#mobileNumber").val('');
                        $("#regemailID").val('');
                        $("#regpassword").val('');
                        $("#confirmPassword").val('');
                        $('.successRegister').html('Successfully register your account.');  
                    }
                    
                });
            },                       
            rules: {
                firstname: {
                    required: true,
                    maxlength: 20,
                },
                lastName: {
                    required: true,
                    maxlength: 20,
                },
                mobileNumber: {
                    required: true,
                    maxlength: 20,
                },
                regemailID: {
                    required: true,
                    maxlength: 40,
                    remote: {                        
                        url: screenReaderText.site_url + "/check-user.php",
                        type: "post",
                        data: {
                            regemailID: function () {                               
                                return $("#regemailID").val();
                            },                            
                        }
                    }
                },
                regpassword: {
                    required: true,
                },
                confirmPassword: {
                    required: true,
                    equalTo: regpassword,
                }

            },
            messages: {
                firstname: {
                    required: "Enter your First name",
                    maxlength: "Enter maximum 20 characters",
                },
                lastName: {
                    required: "Enter your Last name",
                    maxlength: "Enter maximum 20 characters",
                },
                mobileNumber: {
                    required: "Enter your Mobile number",
                    maxlength: "Enter maximum 20 characters",
                },
                regemailID: {
                    required: "Enter your Email ID",
                    maxlength: "Enter maximum 40 characters",
                    remote: jQuery.validator.format("{0} is registered user.")
                },
                regpassword: {
                    required: "Enter your password",
                },
                confirmPassword: {
                    required: "Enter your Confirm Password",
                    equalTo: "Password and Confirm Password are not match"
                }
            }
        });
    }


});