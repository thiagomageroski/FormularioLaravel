@extends('layout.app')

@section('content')

<div class="form-container">
    <h1>📝 Entre em Contato</h1>
    <p>Preencha o formulário abaixo</p>

    <form action="/contato" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="seuemail@exemplo.com" required>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>

@endsection

<style>
    body {
    background: linear-gradient(to bottom, #002447, #005c4b, #018052);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 175px;
}

.form-container {
    background-color: white;
    margin: 80px auto;
    max-width: 600px;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.form-container h1 {
    margin-bottom: 10px;
    color: #333;
}

.form-container p {
    color: #666;
    margin-bottom: 25px;
}

.form-group {
    text-align: left;
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 6px;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border-color 0.3s;
}

.form-group input:focus {
    border-color: #5a9dfd;
    outline: none;
}

button[type="submit"] {
    background-color: #5a9dfd;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

button[type="submit"]:hover {
    background-color: #3f83f8;
}

</style>