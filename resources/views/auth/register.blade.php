<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
</head>
<body>
    <h1>Crear cuenta</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register.store')}}" method="post">
        @csrf

        <div>
            <label for="name">Nombre completo</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>

            <label for="document_type">Tipo de documente</label>
            <select name="document_type" id="document_type" required>
                <option value="">Selecciona una opción</option>
                <option value="CC" {{ old('document_type') === 'CC' ? 'selected' : '' }}>Cédula de ciudadanía</option>
                <option value="TI" {{ old('document_type') === 'TI' ? 'selected' : '' }}>Tarjeta de identidad</option>
                <option value="CE" {{ old('document_type') === 'CE' ? 'selected' : '' }}>Cédula de extranjería</option>
                <option value="TE" {{ old('document_type') === 'TE' ? 'selected' : '' }}>Tarjeta de extranjería</option>
                <option value="PAS" {{ old('document_type') === 'PAS' ? 'selected' : '' }}>Pasaporte</option>
                <option value="PPT" {{ old('document_type') === 'PPT' ? 'selected' : '' }}>Permiso por Protección Temporal (PPT)</option>
                <option value="NIT" {{ old('document_type') === 'NIT' ? 'selected' : '' }}>NIT</option>
                <option value="DNI" {{ old('document_type') === 'DNI' ? 'selected' : '' }}>Documento de identidad extranjero</option>
            </select><br>

            <label for="document_number">Número de documento</label>
            <input id="document_number" name="document_number" value="{{ old('document_number') }}" required><br>

            <label for="phone">Teléfono</label>
            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"><br>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>

            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" value="{{ old('password') }}" required><br>

            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" required>
        </div>

        <div>
            <button type="submit">Crear cuenta</button>
        </div>
    </form>
    
</body>
</html>