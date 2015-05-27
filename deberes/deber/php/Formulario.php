
<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <form action="./datos.php" method="POST">
        <p>
         <h1><label>Formulario de registro MAC Computers S.A.</label></h1>
       </p>
       <p>
       </p>
       <p>

       <!--Labels-->
         <label>Nombre:</label>
         <input type="text" name="nombre" />
       </p>
       <p>
         <label>Apellido:</label>
         <input type="text" name="apellido" />
       </p>
       <p>
       Genero:</td><br>
     <label>
     <!--Radio Buttons-->
         <input type="radio" name="genero" id="masculino" value="Masculino" /> 
              Masculino </label>
              <input type="radio" name="genero" id="femenino" value="Femenino" /> 
              Femenino </label>
     <br />
     <label>
            
      <br />
      <!--List-->
          <label>Correo electronico:</label>
         <input type="text" name="correo_electronico" /> 
       </p>
       <p>
           Cuidad de nacimiento:
           <select name="cuidad" id="ciudad">
                <option>Quito</option>
                <option>Guayaquil</option>
                <option>Cuenca</option>
                <option>Otavalo</option>
                <option>Manabi</option>
                <option>Loja</option>
                <option>Macas</option>
                <option>Otro</option>
         </select>        
       </p>
       <p>
       <!--ChecksBoxs-->
           Intereses:
           <br>
           <INPUT type="checkbox" name="intereses" value="Programacion">Programacion<br />
           <INPUT type="checkbox" name="intereses" value="Redes">Redes<br />
           <INPUT type="checkbox" name="intereses" value="Emsambleje">Ensamblaje<br />
           <INPUT type="checkbox" name="intereses" value="SOA">SOA<br>
           <INPUT type="checkbox" name="intereses" value="BI">BI<br />
           <INPUT type="checkbox" name="intereses" value="Analisis de Texto">Analisis de Texto<br />
           <INPUT type="checkbox" name="intereses" value="Big Data">Big Data<br>
           <INPUT type="checkbox" name="intereses" value="Redes Sociales">Redes sociales<br>
       </p>
       <p>
           Acerca de ti:
           <br>
           <textarea id="biografia" name="biografia" rows="5" cols="20">
           </textarea>
       </p>
       <p>
        <input type="submit" value="Guardar cambios" />
       </p>
     </form>
    </body>
</html>
