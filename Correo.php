<?php
class Correo{
    private $destinatario;
    private $asunto;
    private $mensaje;
    private $encabezados_adicionales;
    private $parametros_adicionales;
    
    public function enviarCorreo($destinatario,$asunto,$mensaje){
        try{
            
            mail($destinatario,$asunto,$mensaje);
            echo '<script>alert("El mensaje se envio correctamente");
            window.history.go(-1);</script>';
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    public function get2FA(){
        $misConjuntosDeCaracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codigoVerificacion2FA=substr(str_shuffle($misConjuntosDeCaracteres), 6, 6);

        return $codigoVerificacion2FA;
    }
}
?>