<?php
    function borrarCookie($galleta){
        if (isset($_COOKIE[$galleta])) {
        setcookie($galleta,"",time()-60*60*24);
        }
        header("location:cookies1.php");
    }
    borrarCookie('visitas');