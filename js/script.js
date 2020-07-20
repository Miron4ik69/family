$(document).ready(function() {
    $('#formTask').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/add',
            data: $(this).serialize(),
            success: function(response)
            {
                alert("Успешно добавлено!")
           }
       });
     });
});
