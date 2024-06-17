<?php 
require '/xampp/htdocs/Pagina-nordvitalips/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['enviado'])) {
    // Captura el name de la input
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $identificacion = $_POST['Identificación'];
    $n_identificacion = $_POST['n-identificacion'];
    $fecha = $_POST['fecha'];
    $numCelular = $_POST['numCelular'];
    $numFijo = $_POST['numFijo'];
    $departamento = $_POST['departamento'];
    $municipio = $_POST['municipio'];
    $email = $_POST['email'];
    $tipo_solicitud = $_POST['tipo-solicitud'];
    $asunto = $_POST['asunto'];
    $solicitud = $_POST['solicitud'];


    // Instancia PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP para el correo principal
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Servidor SMTP proporcionado
        $mail->SMTPAuth   = true;                  // Habilitar autenticación SMTP
        $mail->Username   = 'juanandresriveraguerrero349@gmail.com'; // Nombre de usuario SMTP proporcionado
        $mail->Password   = 'ubhp svdj zjym bebj';           // Contraseña SMTP proporcionada
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Protocolo de seguridad
        $mail->Port       = 465;                   // Puerto SMTP proporcionado

        // Configuración del remitente y destinatario para el correo principal
        $mail->setFrom('info@nordvitalips.com', 'Equipo de soporte');
        $mail->addAddress('info@nordvitalips.com', 'Nombre del destinatario');

        // Contenido del correo principal
        $mail->isHTML(true);
        $mail->Subject = 'Nueva Solicitud de PQRSFD';
        $mail->Body    = "Nombre: $nombre<br>Apellido: $apellido<br>Identificación: $identificacion<br>Número de identificación: $n_identificacion<br>Fecha: $fecha<br>Celular: $numCelular<br>Teléfono fijo: $numFijo<br>Departamento: $departamento<br>Municipio: $municipio<br>Email: $email<br>Tipo de solicitud: $tipo_solicitud<br>Asunto: $asunto<br>Solicitud: $solicitud";
        $mail->AltBody = "Nombre: $nombre\nApellido: $apellido\nIdentificación: $identificacion\nNúmero de identificación: $n_identificacion\nFecha: $fecha\nCelular: $numCelular\nTeléfono fijo: $numFijo\nDepartamento: $departamento\nMunicipio: $municipio\nEmail: $email\nTipo de solicitud: $tipo_solicitud\nAsunto: $asunto\nSolicitud: $solicitud";

        // Enviar el correo principal
        $mail->send();

        echo 'El mensaje ha sido enviado correctamente';
    } catch (Exception $e) {
        echo "El mensaje no pudo ser enviado. Error: {$mail->ErrorInfo}";
    }
}
?>  