
/*estan funciones son principalmente para evitar que el sitio se recargue la pagina asi recortando los tiempos
* de carga, tambien para evitar que el tab se devuelva y como por ultimo tambien para evitar que un formulario
* le genere un error a otra ya que estan la misma vista*/
    $('#enviar1').click(function (){ //al hacerse click en el boton submit del formulario se ejecuta esta funcion
    $.ajax({ //se implemento ajax por que es la mejor manera de realizar lo antes mencionado
        url: 'ParesUno.php', //se define la ruta hacia donde iran los datos del formulario
        type: 'POST', //se define el tipo de envio
        data: $('#formulario1').serialize(), //se toman los datos del formulario para enviarlos
        success: function (res){ //una vez que resulte exitoso el envio se devolvera los datos procesados
            $('#respuesta1').html(res);
        }
    });
    return false;
    });
    /* si bien de aqui en adelante se repiten los mismos script se podrian acortar mas el codigo
    * utilizando un case pero por temas de tiempo y priorizacion de otros elementos se omitio*/
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
