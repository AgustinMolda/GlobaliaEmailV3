<h1>Correo enviado correctamente</h1>

<p>Se ha recibido un nuevo formulario de contacto con los siguientes detalles:</p>

<ul style="text-decoration: none">
    <li><strong>Nombre Completo:</strong> {{ $formEmail['nombreCompleto'] }}</li>
    <li><strong>Nombre de la Empresa:</strong> {{ $formEmail['nombreEmpresa'] ?? 'N/A' }}</li>
    <li><strong>Número de WhatsApp:</strong> {{ $formEmail['numeroWhatsapp'] }}</li>
    <li><strong>Correo Electrónico:</strong> {{ $formEmail['email'] }}</li>
    <li><strong>Tipo de Servicio:</strong> {{ $formEmail['tipoServicio'] }}</li>
    <li><strong>Motivo del Contacto:</strong> {{ $formEmail['motivoContacto'] }}</li>

</ul>   