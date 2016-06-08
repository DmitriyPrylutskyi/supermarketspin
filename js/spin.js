$('document').ready(function () {
    $.get('server.php', function (result) {
        $('.item1').html(result);
    });
});
//# sourceMappingURL=spin.js.map