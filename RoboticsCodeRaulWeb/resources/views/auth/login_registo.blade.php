<!DOCTYPE html>
<html>

<head>
    <title>Robotics Code Raul</title>
    <link href="/assets/img/favpng.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="/assets/css/login_registo.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Registar</label>
                <input type="text" name="txt" placeholder="Primeiro e Último nome" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pswd" placeholder="Password" required>
                <button>Registar</button>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Aceder</label>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="pswd" placeholder="Password" required>
                <button>Aceder</button>
                <div class="div"></div>
            </form>
        </div>
    </div>
</body>

</html>
