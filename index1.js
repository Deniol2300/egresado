$(document).ready(function(){
    // alert('pruebaaaaaaaaaaaaa')
    $.ajax({
        type: 'POST',
        url: 'c_depa.php',
        data: {'peticion' : 'c_depa'}
    })
    .done(function(departamento){
        $('#depar').html(departamento)

    })
    .fail(function(){
        alert('hubo un error a cargar los nombres de departamento')
    })

    $('#depar').on('change',function(){
        var id = $('#depar').val()
        alert(id)
        $.ajax({
            type: 'POST',
            url: 'c_prov.php',
            data: {'id' : id  }
        })
        .done(function(provincia){
            $('#prov').html(provincia)
                
        })
        .fail(function(){
            alert('hubo un error a cargar los nombres de provinciase')
        }) 

    })

    //USAREMOS AJAX PARA LAS ESCUELAS Y FACULTADES  DE LA MISMA FORMA QUE CON LOS DEPARTAMENTOS Y PROVINCIAS
    $.ajax({
        type: 'POST',
        url: 'c_fac.php',
        data: {'peticion' : 'c_fac'}
    })
    .done(function(facultad){
        $('#fac').html(facultad)

    })
    .fail(function(){
        alert('hubo un error a cargar los nombres de departamento')
    })

    $('#fac').on('change',function(){
        var id = $('#fac').val()
        alert(id)
        $.ajax({
            type: 'POST',
            url: 'c_esc.php',
            data: {'id' : id  }
        })
        .done(function(escuela){
            $('#ep').html(escuela)
                
        })
        .fail(function(){
            alert('hubo un error a cargar los nombres de provinciase')
        }) 

    })
    /* hacemos una funcion que se encargara del evento cuando haga click y realizara la funcion q esta adentro function () */
    $('#enviar').on('submit', function(e){
        alert('funciona')
        alert(depar)
        e.preventDefault();
        var resultado = 'departamento: ' + $('#depar option:selected').text() + 'provincia: ' + $('#prov option:selected').text()
        $('#resultado1').html(resultado)
        var result = $(this).serialize();
        e.preventDefault();
        console.log(result);
        alert(fac)
    })
})