
    $('#enviar1').click(function (){
    $.ajax({
        url: 'ParesUno.php',
        type: 'POST',
        data: $('#formulario1').serialize(),
        success: function (res){
            $('#respuesta1').html(res);
        }
    });
    return false;
});
    $('#enviar2').click(function (){
    $.ajax({
        url: 'ParesDos.php',
        type: 'POST',
        data: $('#formulario2').serialize(),
        success: function (res){
            $('#respuesta2').html(res);
        }
    });
    return false;
});
    $('#enviar3').click(function (){
    $.ajax({
        url: 'ImparesUno.php',
        type: 'POST',
        data: $('#formulario3').serialize(),
        success: function (res){
            $('#respuesta3').html(res);
        }
    });
    return false;
});
    $('#enviar4').click(function (){
    $.ajax({
        url: 'ImparesDos.php',
        type: 'POST',
        data: $('#formulario4').serialize(),
        success: function (res){
            $('#respuesta4').html(res);
        }
    });
    return false;
});
    $('#enviar5').click(function (){
    $.ajax({
        url: 'Fibonacci.php',
        type: 'POST',
        data: $('#formulario5').serialize(),
        success: function (res){
            $('#respuesta5').html(res);
        }
    });
    return false;
});
