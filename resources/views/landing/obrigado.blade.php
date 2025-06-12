@extends('layout.app')

@section('content')
<div class="thankyou-container">
    <div class="thankyou-box">
        <h1>✅ Obrigado pelas informações!</h1>
        <p>Em breve entraremos em contato com você.</p>
        <a href="/" class="btn-return">Voltar para o início</a>
    </div>
</div>
@endsection

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;
    background: linear-gradient(to bottom, #002447, #005c4b, #018052);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}

.thankyou-container {
    text-align: center;
    padding: 40px;
}

.thankyou-box {
    background-color: rgb(255, 255, 255);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    max-width: 500px;
    margin: auto;
}

.thankyou-box h1 {
    margin-bottom: 20px;
    font-size: 28px;
    color: #333333;
}

.thankyou-box p {
    margin-bottom: 30px;
    font-size: 18px;
    color: #666666;
}

.btn-return {
    background-color: #5a9dfd;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-decoration: none;
}

.btn-return:hover {
    background-color: #3f83f8;
}

</style>

