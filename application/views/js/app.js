$(document).ready(function (){
    $("#registerForm").submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var patient_name = $("input[name=patient_name]").val();
        var birth_date = $("input[name=birth_date]").val();
        var gender = $("input[name=gender]:checked").val();
        var weight = $("input[name=weight]").val();
        var height = $("input[name=height]").val();
        var username = $("input[name=username]").val();
        var password = $("input[name=password]").val();
        var conpassword = $("input[name=conpassword]").val();

        if(/\d\w/.test(patient_name) != true){
            if(gender != null){
                if(isNaN(weight) != true && isNaN(height) != true){
                     if(/[^_0-9aA-zZ]/i.test(username) != true){
                        if(password == conpassword){
                            if(/\d/.test(password) == true && password.length >= 6){
                                $.ajax({
                                    url: 'http://localhost/health/main/api_register',
                                    type:"post",
                                    dataType: "json",
                                    data: data,
                                    success: function(response){
                                        if(response.success == true){
                                        console.log("success transfer");
                                        console.log(data);
                                        }
                                        else{
                                            console.log('exisiting username');
                                        }

                                    }
                                });
                            }
                            else{
                                console.log("password must have numbers and length is greater than 6");
                            }
                        }
                        else{
                            console.log("password not match");
                        }
                            
                    }
                    else{
                        console.log("accept only words number and underscore");
                    }   
                }
                else{
                    console.log("weight and height is not a number");
                }
            }
            else{
                console.log("no gender");
            }
        }
        else{
            console.log("name accept only words");
        }
    });

    $("#loginForm").submit(function(e){
        e.preventDefault();
        var log_username = $("input[name=log_username]").val();
        var log_password = $("input[name=log_password]").val();

        $.ajax({
                    type: "get",
                    url: 'http://localhost/health/main/api_getlogIn',
                    dataType: "html",
                    data: {
                        log_password: log_password,
                        log_username: log_username
                    },
                    success: function(data){
                        console.log('success');
                        console.log(data);
                    },
                    error: function(){
                        console.log('cant get data');
                    }   
                });
    });
});