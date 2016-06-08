$('document').ready(function() {
    $.get('server.php', (result:any []) => {
        $('.item1').html(result);
    });
});
