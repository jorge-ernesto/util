<?php 

// Creamos hash de contraseña usando algorito MD5
$pwd = Hash("MD5", "admin");
echo "MD5: {$pwd} <br>";
echo "Caracteres: ".strlen($pwd)."<br><br>";

// Creamos hash de contraseña usando algorito SHA256
$pwd = Hash("SHA256", "admin");
echo "SHA256: {$pwd} <br>";
echo "Caracteres: ".strlen($pwd)."<br><br>";

// Creamos hash de contraseña usando algorito PASSWORD_BCRYPT
$pwd = password_hash("admin", PASSWORD_BCRYPT, ['cost' => 4]);
echo "PASSWORD_BCRYPT: {$pwd} <br>";
echo "Caracteres: ".strlen($pwd)."<br><br>";

// Verificar contraseña
$pwdvrf = password_verify("admin", $pwd);
if($pwdvrf) {
   echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
