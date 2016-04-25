<?php ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>INICIO</title>
        <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body style="background-color: grey"><center>
        <h1>Bienvenido al portal Boby Duoc</h1>
        <br>
        <br>
        <br>
        <fieldset style="background-color: black">
            <form method="POST" action="agrega.php">
                <tr>
                    <td><input type="text" name="user" id="user" required="true"</td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" id="pass" required="true"</td>
                </tr>
                <tr>
                    <td><input type="submit" name="entrar" id="entrar"value="Entrar" onclick="Validar()"</td>
                </tr>            
            </form>
        </fieldset>
    </center>
</body>
<script type="text/javascript" >
function Validar(){
    var clave;
    var dato=$("clave").val();
    clave=CryptoJS.MD5(dato).toString();
    alert(clave);    
}
</script>
</html>