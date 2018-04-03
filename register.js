
$('document').ready(function()
{
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

    
    //name validation
    var nameregex = /^[a-zA-Z ]+$/;
    $.validator.addMethod("validname", function(value,element){
        return this.optional(element) || nameregex.test(value);
    });

    //valid email pattern
    var eregex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    $.validator.addMethod("validemail",function(value,element){
        return this.optional(element) || eregex.test(value);
    });

    //deni validation
    var dniregex = /^[0-9{8}]+$/;
    $.validator.addMethod("validdni",function(value,element){
        return this.optional(element) || dniregex.test(value);
    });

    //apellidoP validation

    var aPregex = /^[a-zA-Z ]+$/;
    $.validator.addMethod("validaP",function(value,element){
        return this.optional(element)|| aPregex.test(value);
    });

    //apellidoM validation
    var aMregex = /^[a-zA-Z ]+$/;
    $.validator.addMethod("validaM",function(value,element){
        return this.optional(element)|| aMregex.test(value);
    });
    
    //inregex validation
    var inregex = /^[0-9{8}]+$/;
    $.validator.addMethod("validin",function(value,element){
        return this.optional(element) || inregex.test(value);
    });

    //egregex validation
    var egregex = /^[0-9{8}]+$/;
    $.validator.addMethod("valideg",function(value,element){
        return this.optional(element) || egregex.test(value);
    });

    //valid password
    // var pasregex = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;
    // $.validator.addMethod("validpassword",function(value,element){
    //     return this.optional(element)|| pasregex.test(value);
    // });
    //valid cpassword
     // jQuery.validator.setDefaults({
        //     debug: true,
        //     success: "valid"
        // });

        

$("#register-form").validate({
    rules:
    {
        name: {
            required: true,
            validname: true,
            minlength: 4
        },
        dni: {
            required: true,
            validdni: true,
            maxlength: 8
        },
        email:{
            required: true,
            validemail: true
            
        },
        
        password:{
            required: true,
            // validpassword: true,
            minlength: 8,
            maxlength: 15
        },
        cpassword: {
            required: true,
            equalTo: '#password'
        },
        apellidoP:{
            required: true,
            validaP: true,
        },
        apellidoM:{
            required: true,
            validaM: true,
        },
        aingreso:{
            required: true,
            maxlength: 4
        },
        aegreso:{
            required: true,
            maxlength: 4
        }
    },
    messages:
    {
        name:{
            required: "Ingrese  el nombre de Usuario",
            validname: "El nombre deberia contener solo letras del alfabeto y espacio",
            minlength: "Nombre muy corto"
        },
        dni:{
            required: "Ingrese DNI",
            validdni: "El dni debe contener solo numeros",
            maxlength: "El DNI debe contener 8 numeros como maximo"
        },
        email: {
            required: "Ingrese su Email",
            validemail: "Ingrese un Email valido"
        },
        password: {
            required:"Ingrese su contraseña",
            minlength:"La contraseña tiene que tener 8 caracteres como minimo"
        },
        cpassword: {
            required: "Reingrese su contraseña",
            equalTo: "La contraseña no concuerda!"
        },
        apellidoP:{
            required: "Ingrese su Apellido Paterno",
            validaP: "El Apellido Paterno debe contener solo letras"
        },
        apellidoM:{
            required:"Ingrese su Apellido Materno",
            validaM:"El Apellido Materno debe contener solo letras"
        },
        aingreso:{
            required:"Ingrese el año de Ingreso",
            maxlength: "El año no debe ser superior a 4 digitos"
        },
        aegreso:{
            required:"Ingrese el año de Egreso",
            maxlength:"EL año no debe ser superior a 4 digitos"
        }
    },

    
    
    errorPlacement: function(error, element){
        $(element).closest('.form-group').find('.help-block').html(error.html());
        console.log(element);
    },
    
    highlight: function(element){
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(element).closest('.form-group').find('.help-block').html('');
    },

    submitHandler: function(form) {
                    form.submit();
    alert('ok');
                }
});





})