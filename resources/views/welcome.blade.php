<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3 Angles Group</title>
     <link rel="stylesheet" href="css/app.css">
     <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="fondo"></div>
<div class="noche"></div>
<div class="conteiner">
    <div class="row">
    <div class="col-md-6 col-6">
     <img class="day-leaves" src="img/day_leaves.png" alt="">
     <img class="night-leaves" src="img/night_leaves.png" alt="">
     <a href="#" onclick="cambiar(true)"><img class="logo" src="img/logo.png" alt=""></a>
     
    </div>

    <div class="col-md-6 col-12 ">
        <div class="contact">
            <p>Cel. <span>321 589 1421</span></p>
            <p>Tel. <span>+57 (1) 641 8254</span></p>
            <p>E-mail. <span>escribenos@3anglesgroup.com</span></p>
        </div>
        <div class="estamos">
            <p>Nos estamos </p>
            <span>re-inventando...</span>
        </div>
        <div class="form">
            <div class="caja-form">
                <h1>Escríbenos!</h1>

                <div class="form-group">
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Celular / Teléfono">
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Mensaje"></textarea>
                </div>
 
            </div>
            
            <button>Enviar</button>
            <a target="_blank"  href="https://www.instagram.com/3anglesgroup/"> <img  src="img/icon-instagram.png" alt=""> <span>3anglesgroup</span></a>
           

        </div>
    </div>
    </div>
</div>

<script>
      var numero = true;

        function cambiar() {
            
            if (numero == true) {
                document.querySelector(".fondo").style.display= 'none';
                document.querySelector(".noche").style.display= 'block';
                document.querySelector(".day-leaves").style.display= 'none';
                document.querySelector(".night-leaves").style.display= 'block';
                numero = false;
            
            }else{
                 document.querySelector(".fondo").style.display = 'block';
                document.querySelector(".noche").style.display = 'none';
                document.querySelector(".day-leaves").style.display = 'block';
                document.querySelector(".night-leaves").style.display = 'none';
                numero = true;
            }            

        }

        

  
        
</script>
    
</body>
</html>