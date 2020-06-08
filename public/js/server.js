$(document).ready(function () {
			
    function detail(response){
        $('#noname').text(response.name);
        $('#cm').text(response.company.name );
        $('#em').text( response.email);
        $('#ph').text( response.phone );

        $('#st').text(response.address.street);
        $('#su').text(response.address.suite);
        $('#city').text(response.address.city);
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