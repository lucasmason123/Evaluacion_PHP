$('#formlogin').submit(function(e){
    e.preventDefault();
    //Traemos las variables del formulario formlogin al javascript y se le agrega una variable local, recordar que el nombre del parametro debe coincidir  con el id del input
    //trim elimina los espacios que traiga el dato ingresado
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    //probar que se este leyendo el valor en el login.php y que lo reciva y muestre el JS.
    //alert(usuario);

    //validacion  si alguno de los campos viene vacio que se indique mediante alerta

    if(usuario.length == "" || password == ""){
        //alert("Usuario o password se encuentran vacios")
        //alerta con SweetAlert 2
        Swal.fire({
            type: 'warning',
            title: 'Ingresar un usuario y/o password',
        });
        return false;
     }else{
        //Envio de datos mediante ajax con formato Json
        $.ajax({
            url:"../modelo/login.php",
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            //generar las alertas con SweetAlert 2
            succes:function(data){
                if(data == "null"){
                    Swal.fire({
                        type: 'error',
                        icon: 'error',
                        title: 'Usuario y/o password incorrecto',
                    });
                    
                }else{
                    Swal.fire({
                        type: 'success',
                        icon: 'success',
                        title: '¡Conexion realizada con exito!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'
                    }).then((result) => {
                        if(result.value){
                            window.location.href ="../vistas/login.php";
                        }
                    })
                }
            }
        })
     }
 });