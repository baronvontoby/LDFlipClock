jQuery(document).ready(function($) {

    $('#set-clock').click(function(e) {
        let data = {
            action: 'add_new_flip_clock_date',
            day: $('#day').val(),
            month: $('#month').val(),
            year: $('#year').val(),
            id: $('#id').val(),
            security: ''
        };

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: data,
            dataType: 'json'
        }).then(function(response) {
            console.log(response);
        })
    });
})