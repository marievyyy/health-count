$(document).ready(function (){
    $("#registerForm").submit(function(e){
        e.preventDefault();
        var patient_name = $("input[name=patient_name]").val();
        var birth_date = $("input[name=birth_date]").val();
        var gender = $("input[name=gender]").val();
        var weight = $("input[name=weight]").val();
        var height = $("input[name=height]").val();
        var username = $("input[name=username]").val();
        var password = $("input[name=password]").val();
        var conpassword = $("input[name=conpassword]").val();
        var submitted = "submitted";

        if(/\d\w/.test(patient_name) != true){
            if(isNaN(weight) != true && isNaN(height) != true){
                 if(/[^_0-9aA-zZ]/i.test(username) != true){
                    if(password == conpassword){
                        if(/\d/.test(password) == true && password.length >= 6){
                            console.log(patient_name, gender, weight, height,username,password,conpassword,submitted);
                            $.ajax({
                                type:"POST",
                                url: 'http://localhost/health/main/api_profile',
                                dataType: "html",
                                data:{
                                    patient_name: patient_name,
                                    birth_date: birth_date,
                                    gender: gender,
                                    weight: weight,
                                    height: height,
                                    username: username,
                                    password: password,
                                    submitted, submitted
                                },
                                success: function(data){
                                    console.log("success transfer");
                                    console.log(data);
                                    get_patients();

                                },
                                error: function(data){
                                    console.log('cant submit data');
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
            console.log("name accept only words");
        }
    });

    function get_patients(){    
        $.ajax({
                    type: "ajax",
                    url: 'http://localhost/health/main/api_getAllPatient',
                    dataType: "json",
                    success: function(data){
                        console.log(data);
                        var html = '';
                        var i; 
                        for(i=0;i<data.length;i++){
                            html += '<tr>' +
                                    '<td>'+data[i].patient_id+'</td>'+
                                    '<td>'+data[i].patient_name+'</td>'+
                                    '<td>' + data[i].birth_date+'</td>'+
                                    '</tr>';
                        }
                        $('#row-data').html(html);
                    },
                    error: function(){
                        console.log('cant get data');
                    }   
                });
    }

    $("#attach-image").submit(function(e){

    });

    $("#loginForm").submit(function(e){
        e.preventDefault();
        var log_username = $("input[name=log_username]").val();
        var log_password = $("input[name=log_password]").val();
        var submitted = "submitted";

        $.ajax({
                    type: "POST",
                    url: 'http://localhost/health/main/api_getlogIn',
                    dataType: "html",
                    data:{
                        log_username: log_username,
                        log_password: log_password,
                        submitted: submitted
                    },
                    success: function(data){
                        console.log('success');
                    },
                    error: function(){
                        console.log('cant get data');
                    }   
                });
    });
});