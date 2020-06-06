$(document).ready(function () {
			
    function detail(response){
        $('#noname').text(response.name);
        $('#bio').text(response.company.name +'\n'+ response.email +"\n"+ response.phone );
    }

    $('.userid').click(function(){
        var id = $(this).attr('userid');
        console.log('id',id);
        $.ajax({
            type: "get",
            url: "https://jsonplaceholder.typicode.com/users/"+id,
            crossDomain: true,
            dataType: "Json",
            beforeSend:function(){
                $("#noname").text('loading...');
            },
            success: function (response) {
                console.log('data',response);
                detail(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status + " " + thrownError);
        },
        });
    })
});