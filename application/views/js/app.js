$(document).ready(function (){
    function showAllPatient(){
        $.ajax({
                    type: "ajax",
                    url: 'http://localhost/health-count/main/getAllPatient',
                    async: false,
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

    $("#registerForm").submit(function(e){
        e.preventDefault();
        $.ajax({
                    type: "ajax",
                    url: 'http://localhost/health-count/main/getAllPatient',
                    async: false,
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
    });
});

