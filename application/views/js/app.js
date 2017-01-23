$(document).ready(function (){
    $("#registerForm").submit(function(e){
        e.preventDefault();
        var patient_name = $("input[name=patient_name]").val();
        var birth_date = $("input[name=birth_date]").val();
        var gender = $("input[name=gender]").val();
        var weight = $("input[name=weight]").val();
        var height = $("input[name=height]").val();
        //var profile_picture = $("input[name=]").val();
        var username = $("input[name=username]").val();
        var password = $("input[name=password]").val();
        var conpassword = $("input[name=conpassword]").val();
        var submitted = "submitted";

        if(/\d\w/.test(patient_name) != true){
            if(isNaN(weight) != true && isNaN(height) != true){
                 if(/[^_0-9aA-zZ]/i.test(username) != true){
                    if(password == conpassword){
                        if(/\d/.test(password) == true && password.length >= 6){
                            $.ajax({
                                type: "ajax",
                                method:"post",
                                url: 'http://192.168.1.8/health/main/api_profile',
                                dataType: "html",
                                data:{
                                    patient_name: patient_name,
                                    birth_date: birth_date,
                                    gender: gender,
                                    weight: weight,
                                    height: height,
                                    //profile_picture: profile_picture,
                                    username: username,
                                    password: password,
                                    submitted, submitted
                                },
                                success: function(data){
                                    console.log("success transfer");
                                    get_patients();

                                },
                                error: function(data){
                                    console.log('cant submit data');
                                    console.log(submitted);
                                }
                            });
                        }
                        else{
                            console.log("password must have numbers and leght is greater than 6");
                        }
                    }
                    else{
                        console.log("password not match");
                    }
                        
                }
                else{
                    console.log("accept onlt words number and underscore");
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
                    url: 'http://192.168.1.8/health/main/api_getAllPatient',
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
});

