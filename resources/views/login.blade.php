<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page de Connexion</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: white; /* Rouge vif */
        color: black;
    }

    .container {
        width: 100%;
        max-width: 600px;
        margin: 100px auto;
        padding: 90px;
        background-color: white;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h2 {
        text-align: center;
        color: #800000; /* Rouge bordeaux */
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        margin-left: 350px;
    }

    .form-group input {
        width: 600px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #473F41;
        margin-left: 350px;
    }

    .form-group button {
        width: 150px;
        padding: 10px;
        border-radius: 5px;
        border: none;
        background-color: #800000; /* Rouge bordeaux */
        color: #fff;
        cursor: pointer;     
    }
    form{
        justify-content: center;
    }

    .form-group button:hover {
        background-color: #600000; /* Rouge bordeaux plus sombre */
    }

    .signup-link {
        text-align: center;
        margin-top: 20px;
    }

    .signup-link a {
        color:#600000;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: none;
    }
</style>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
    <h2>LOGIN</h2>
    <form action="{{route('login.post')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="email" id="username" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="....." required>
        </div>
        <div class="form-group text-center">
            <button type="submit">Se connecter</button>
        </div>
    </form>
    <div class="signup-link">
        <p>voulez vous proceder à l'inscription? <a href="{{route('signup.blade')}}">S'inscrire ici</a></p>
    </div>
</div>

</body>
</html>
