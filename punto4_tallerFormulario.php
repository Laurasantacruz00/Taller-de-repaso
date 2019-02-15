<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Formulario</title>
	<!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script type="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <style>
        .container{/*Contenedor donde se encuentra la informacion de la pagina*/
            margin: 50px 90px 50px 90px;/*Espacio desde esquina de la pagina hasta el borde*/
            padding: 20px 30px 20px 30px;/*Espacio desde borde hasta las letras*/
            text-align: justify;
            /*Espacio entre el margin y padding*/
            border-left: 2px solid blue;
            border-right: 2px solid blue;
            border-bottom: 2px solid blue;
            border-top: 2px solid blue;
        }
        
        #titulo{/*Identificador unico que tiene al titulo*/
            text-align: center;/*Texto centrado*/
            color:blue;/*Color de letra*/

            margin-top: 10px;
            margin-bottom: 50px;
        }


    </style>


</head>
<body>
    
    <!--Contenedor, donde se encuentran todo el contenido de la pagina-->
    <form>
        <div class="container">
            <!--Titulo-->
            <header class="row"> 
                <div class="col-6 offset-md-3" >
                    <!--Badge BOOTSTRAP 1-->
                    <h1 id="titulo" >Taller 1: Punto 4. Laura Santacruz </h1>
                </div>
            </header>

                <!--Informacion personal-->
               
            <div class="col">
                <!--Nombre y apellido-->
                <h4>Informacion personal</h4>

                <div class="col">
                    <input type="text" class="form-control" id = "Nombre" placeholder="Nombre">
                </div>
                            
                <div class="col">
                    <br><input type="text" class="form-control" id = "Apellido" placeholder="Apellido">
                </div>
                
                <!--Email-->    		
                <div class="col">
                    <br><input type="email" class="form-control" id="Email" placeholder="Email">
                </div>
            </div>
                
               
            <!--Informacion de tarjeta -->
            
            <div class="form-group col-md-6">
                <br><h4>Informacion de tarjeta</h4>

                    <!--Tipo de tarjeta-->
                <div class="form-group col-md-6"></div>
                    <label for="TypeC">Tipo de tarjeta de cerdito</label>
                    <select id="TypeC" class="form-control">
                        <option selected>Elegir...</option>
                        <option>Visa</option>
                        <option>MasterCard</option>
                        <option>AmericanExpress</option>
                    </select>
                </div>    

                <!--Titular de tarjeta-->
                <div class="col">
                    <input type="text" class="form-control" id = "Titulart" placeholder="TitularT">
                </div>
                
                <!--Numero de tarjeta-->
                <div class="col">
                    <br><input type="text" class="form-control" id = "numeroT" placeholder="NumTarjeta">
                </div>
        
                <!--CVV2-->
                <div class="col">
                    <br><input type="text" class="form-control" id = "cvv2" placeholder="CVV2">
                </div>
        
                <!--Exp.date-->		
                <div class="col">
                    <div claas="form-group col-md-2">
                        <br><label for="Date1">Fecha de expedicion de tarjeta</label>
                        <select id="Date1" class="form-control">
                            <option selected>Mes</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>	
                        </select>
                    </div>	      
                    <div claas="form-group col-md-2">
                        <label for="Date2"></label>        
                        <select id="Date2" class="form-control">
                            <option selected>Año</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                                <option>2003</option>
                                <option>2004</option>
                                <option>2005</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                        </select>
                    </div>	
                </div>
                <br><h4>Direccion de envio</h4>

                <div class="col">
                    <!--Street address-->
                    <label for="Direccion">Direccion</label>
                    <input type="text" class="form-control" id="Direccion" placeholder="1234 Main St">
                </div>
                <br>
                <div class="form-group col-md-2">
                    <!--Estado-->
                    <div class="col">
                        <select id="Estado" class="form-control">
                            <option selected>Estado...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <!--Ciudad-->
                    <div class="col">
                            <br><select id="Ciudad" class="form-control">
                                <option selected>Ciudad...</option>
                                <option>Bogota</option>
                                <option>Medellin</option>
                                <option>Barranquilla</option>
                            </select>      
                    </div>    
                </div>

                <!--ZIP-->
                <div class="form-group col-md-2">
                    <input type="text" class="form-control" id="ZIP" placeholder="ZIP">
                </div>
                <!--Telefono-->    
                <div class="col">
                <input type="Numero" class="form-control" id = "telefono" placeholder="Numero de telefono">
                </div>
        
        
                <br><div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Certifico que soy mayor de 18 años y acepto los terminos de este registro
                        </label>
                    </div>
                </div>
                
                <br><button type="submit" class="btn btn-primary" id="enviar">Enviar</button>
            </div>
        </div>    
    </form> 
   
    <br>
    <br>
    <br>

    <div id="respuesta"></div>


	<!-- JS Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
</body>

    <script>
        $('#enviar').click(function(){
            /*Informacion personal*/
            var Nombre = document.getElementById('Nombre').value;
            var Apellido = document.getElementById('Apellido').value;
            var Email = document.getElementById('Email').value;

            /*Imformacion de tarjeta de credito*/
            var TypeC = document.getElementById('TypeC').value;
            var TitularT = document.getElementById('TitularT').value;
            var numeroT = document.getElementById('numeroT').value;
            var cvv2= document.getElementById('cvv2').value;
            var MesExp= document.getElementById('Date1').value;
            var AñoExp= document.getElementById('Date2').value;

            /*Direccion de envio*/
            var Direccion = document.getElementById('Direccion').value;
            var Ciudad = document.getElementById('Ciudad').value;
            var Estado = document.getElementById('Estado').value;
            var ZIP = document.getElementById('ZIP').value;
            var telefono = document.getElementById('telefono').value;

            var ruta="Nom="+Nombre+"&Ape="+Apellido+"&tele="+telefono+"&Ema="+Email+"&TypeC="+TypeC+"&numT="+numeroT+"&Titular="+TitularT+"&cvv2="+cvv2+"&date1="+MesExp+"&date2="+AñoExp+"&dire="+Direccion+"&ciu="+Ciudad+"&esta="+Estado+"&zip="+ZIP;

            $.ajax({
                url:'punto4_tallerFormulario2.php',
                type: 'POST',
                data: ruta,
            })

            .done(function(res){
                $(_'#respuesta'_).html(res)
            })

            .fail(function(){
                console.log("Error");
            })
            .always(function(){
                console.log("Complete");
            });

        });
        
    </script>



</html>