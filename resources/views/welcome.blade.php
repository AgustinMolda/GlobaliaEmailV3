<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Globalia Mail</title>
</head>
<body>
    <form action="{{ route('enviar-correo') }}" method="POST">
        @csrf

        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nombre Completo -->
            <div class="flex flex-col">
                <label for="nombreCompleto" class="text-sm font-semibold text-gray-600 mb-1">Nombre Completo</label>
                <input type="text" name="nombreCompleto" id="nombreCompleto" required
                    class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="Ej: Juan Pérez">
            </div>

            <!-- Nombre de la Empresa -->
            <div class="flex flex-col">
                <label for="nombreEmpresa" class="text-sm font-semibold text-gray-600 mb-1">Nombre de la Empresa</label>
                <input type="text" name="nombreEmpresa" id="nombreEmpresa"
                    class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="Opcional">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- WhatsApp -->
            <div class="flex flex-col">
                <label for="numeroWhatsapp" class="text-sm font-semibold text-gray-600 mb-1">Número de WhatsApp</label>
                <input type="tel" name="numeroWhatsapp" id="numeroWhatsapp" required
                    class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="+54 9 11 ...">
            </div>

            <!-- Email -->
            <div class="flex flex-col">
                <label for="email" class="text-sm font-semibold text-gray-600 mb-1">Correo Electrónico</label>
                <input type="email" name="email" id="email" required
                    class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                    placeholder="juan@ejemplo.com">
            </div>
        </div>

        <!-- Tipo de Servicio -->
        <div class="flex flex-col">
            <label for="tipoServicio" class="text-sm font-semibold text-gray-600 mb-1">Tipo de Servicio</label>
            <select name="tipoServicio" id="tipoServicio" required
                class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 bg-white outline-none transition">
                <option value="" disabled selected>Seleccione un servicio</option>
                <option value="consultoria">Consultoría</option>
                <option value="desarrollo">Desarrollo Web</option>
                <option value="marketing">Marketing Digital</option>
                <option value="soporte">Soporte Técnico</option>
            </select>
        </div>

        <!-- Motivo de Contacto -->
        <div class="flex flex-col">
            <label for="motivoContacto" class="text-sm font-semibold text-gray-600 mb-1">Motivo del Contacto</label>
            <textarea name="motivoContacto" id="motivoContacto" rows="4" required
                class="border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none transition"
                placeholder="Cuéntanos en qué podemos ayudarte..."></textarea>
        </div>


        <button type="submit">Enviar correo</button>
    </form>
</body>
</html>