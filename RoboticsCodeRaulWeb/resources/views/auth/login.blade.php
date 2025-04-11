<!DOCTYPE html>
<html>

@include('layouts.login.head')

<body>
    <div class="main">
        <div class="login">
            <form method="POST" action="{{ route('login') }}" onsubmit="return handleFormSubmit(event)">
                @csrf
                <label for="chk" aria-hidden="true">Aceder</label>

                <!-- Campo para Email -->
                <input type="email" name="email" placeholder="Email" required class="mb-3"
                    pattern="[a-zA-Z0-9._%+-]+@aerp\.pt" title="O email deve ser um endereço @aerp.pt">
                @if ($errors->has('email'))
                    <p class="label-error" style="color: rgb(0, 0, 0);">
                        {{ $errors->first('email') }}
                    </p>
                @endif

                <!-- Campo para Senha -->
                <input type="password" name="password" placeholder="Password" required
                    title="A senha deve ter pelo menos 8 caracteres" class="mb-3">
                @if ($errors->has('password'))
                    <p class="label-error" style="color: rgb(0, 0, 0);">
                        {{ $errors->first('password', 'A senha deve ter pelo menos 8 caracteres.') }}
                    </p>
                @endif

                <button type="submit" class="mt-3">Entrar</button>
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
                if (!form.email.checkValidity()) {
                    errorMessage += form.email.title + '\n';
                }
                if (!form.password.checkValidity()) {
                    errorMessage += form.password.title + '\n';
                }
                alert(errorMessage);
            }
        }
    </script>
</body>

</html>
