<!DOCTYPE html>
<html>

@include('layouts.head_registo')

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <!-- Formulário de Registro -->
        <div class="signup">
            <form method="POST" action="{{ route('register') }}" onsubmit="return handleFormSubmit(event)">
                @csrf
                <label for="chk" aria-hidden="true">Registar</label>

                <!-- Campo para Nome -->
                <input id="name" type="text" name="name" value="{{ old('name') }}" required
                    placeholder="Primeiro e Último Nome" class="mb-3" pattern="[a-zA-Z\s]+"
                    title="O nome não pode conter números.">
                @if ($errors->has('name'))
                    <p class="label-error" style="margin-left: 10px; color: red;">
                        {{ $errors->first('name') }}
                    </p>
                @endif

                <!-- Campo para Email -->
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                    class="mb-3" pattern="[a-zA-Z0-9._%+-]+@aerp\.pt" title="O email deve ser um endereço @aerp.pt">
                @if ($errors->has('email'))
                    <p class="label-error" style="margin-left: 30px; color: rgb(0, 0, 0);">
                        {{ $errors->first('email') }}
                    </p>
                @endif

                <!-- Campo para Senha -->
                <input type="password" name="password" placeholder="Password" required
                    title="A senha deve ter pelo menos 8 caracteres" class="mb-3">
                @if ($errors->has('password'))
                    <p class="label-error" style="margin-left: 30px; color: rgb(0, 0, 0);">
                        {{ $errors->first('password', 'A senha deve ter pelo menos 8 caracteres.') }}
                    </p>
                @endif

                <!-- Campo para Confirmar Senha -->
                <input type="password" name="password_confirmation" placeholder="Confirme sua Password" required
                    title="As senhas devem coincidir" class="mb-3">

                <button type="submit" class="mt-3">Concluir Registo</button>
            </form>
        </div>
    </div>

    <script>
        function handleFormSubmit(event) {
            event.preventDefault();
            const form = event.target;

            if (form.checkValidity()) {
                form.submit();
            } else {
                let errorMessage = '';
                if (!form.name.checkValidity()) {
                    errorMessage += form.name.title + '\n';
                }
                if (!form.email.checkValidity()) {
                    errorMessage += form.email.title + '\n';
                }
                if (!form.password.checkValidity()) {
                    errorMessage += form.password.title + '\n';
                }
                if (!form.password_confirmation.checkValidity()) {
                    errorMessage += form.password_confirmation.title + '\n';
                }
                alert(errorMessage);
            }
        }
    </script>
</body>

</html>
