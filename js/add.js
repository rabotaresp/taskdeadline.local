$(document).ready(function () {
    $("#btn_add").on('click', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'get',
            url: '../add.php',
            data:{
                deadline:$('#deadline_add').val(),
                task:$('#task_add').val(),
                button_done:$
            },
            success:function (data) {
                $('form input').val();
                $('table').append('<tr><td>'+$('#task_add').val()+'</td><td>'+$('#deadline_add').val()+'</td><td></td><td></td></tr>');

            },
            error:function (data) {
                console.log('error');
            }

        });

    });
});
