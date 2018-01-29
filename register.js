
$('document').ready(function()
{
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
    },
    messages:
    {
        name:{
            required: "Ingrese  el nombre de Usuario",
            validname: "El nombre deberia contener solo letras del alfabeto y espacio",
            minlength: "Nombre muy corto"
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