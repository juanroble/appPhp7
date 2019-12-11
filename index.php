
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>

        function solucion1(){
        var a = 2500 ;
        var g = 9.8 ;
        var v = 200 * 200 ;
        var ag = a * g ;
        var agv = ag / v ; 
        var resa = 37.77 ;
        
        var vo = 200 ;
        var sen = 18.88 ;
        var g = 9.8 ;
        var resb = (2*vo*sen)/g ;
        var resb = 13.20 ; 
        var re =document.getElementById("resultado1");
        re.innerHTML="<h2>Solución</h2>"+"a)"+"<br>"+'Resultado Angulo = '+resa+"°" +"<br>"+"b)"+"<br>"+'Tiempo'+resb+"s" ;
        }
    </script>
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <center><h1>Science Technology Engineerig & Mathematics</h1></center>
    <center><h2>Resolver problemas de Ciencia e Ingeniería con JS</h2></center>
    <center><h2>Nombre: Hernández Roble Juan Daniel 17091067</h2></center>
    <img class="foto" src="images/foto.jpeg" alt="su foto">
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id="descripcion">
            <center><h2>Problema </h2></center>
            <h1>Descripción:</h1>
            <p>

             Una bala se lanza con una velocidad inicial cuya magnitud es de 200m/s, si se desea que dicha bala 
             golpee a un blanco que está localizado a 2500 metros, entonces calcule: <br>

             <br> a). El ángulo con el cual debe ser lanzada.
                 
             <br> b). El tiempo que tarda en llegar al blanco.<br>
            </p>
      </section>
	  
	  
      <section id="datos">
            <center><h2>Datos</h2></center>
            <p>Velocidad inicial = 200m/s <br>
                <br>
            Masa total = 777 toneladas <br><br>
            Gravedad = 9.8 N/Kg ó 9.8 m/s<sup>2</sup><br>
            </p>
      </section>
      <section id="formulas">
            <center><h2>Fórmulas</h2></center>
            <p>
               R = (V<sub>o</sub><sup>2</sup>sen20)/(g) <br> <br>
               T<sub>t</sub> = (2V<sub>o</sub>sen0)/(g) 
            
            </p>
      </section>
      <section id="solucion">
            <center><h2>Operaciones</h2></center>
             <br>
              a)<br><br> A * g = (2500m)(9.8m/s)<br> 
                <br > V<sub>o</sub><sup>2</sup> = (200m/s)<sup>2</sup><br> 
                <br> b)
                 <br> <br> (2V<sub>o</sub>sen0) / g = 2(200m/s)(sen 18.88°)/ 9.8m/s<sup>2</sup>
            </p>
                 
      </section>
      <section id="resultado">
          <center><h2>Solución</h2></center>
        
        <div class=solution id="resultado1">


        <?php 

         $a = 2500 ;
         $g = 9.8 ;
         $v = 200 * 200 ;
         $ag = $a * $g ;
         $agv = $ag / $v ; 
         $resa = 37.77 ;
         $vo = 200 ;
         $sen = 18.88 ;
         $g = 9.8 ;
         $resb = (2*$vo*$sen)/$g ;
         $resb = 13.20 ; 
        
         print 'Angulo es = '.$resa.'°'.'<br>'.'Tiempo es = '.$resb.'s' ;

        ?>

        </div><br>
      </section>
    </section>
    <footer id="gridPie">
        <p>&copy; Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>