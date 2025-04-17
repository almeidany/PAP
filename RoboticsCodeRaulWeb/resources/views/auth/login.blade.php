<!DOCTYPE html>
<html>

@include('layouts.login.head')

<body>
    <div class="main">
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="chk" aria-hidden="true">Aceder</label>
                <!-- Campo para Email -->
                <input type="email" name="email" placeholder="Email" required class="mb-3" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <p class="label-error" style="color: rgb(0, 0, 0);">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                <!-- Campo para Senha -->
                <input type="password" name="password" placeholder="Password" required
                    class="mb-3">
                @if ($errors->has('password'))
                    <p class="label-error" style="color: rgb(0, 0, 0);">
                        {{ $errors->first('password') }}
                    </p>
                @endif
                <button type="submit" class="mt-3">Entrar</button>
            </form>
            <form window.location.href='{{ route('register') }}'>
                @csrf
                <button type="submit" class="btn btn-outline-primary">Ir para o registo</button>
            </form> 
        </div>
    </div>
</body>

</html>
