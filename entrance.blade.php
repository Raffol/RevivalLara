<style>
    section{
        margin: 100px 650px;
    }
    h2{
        font-size: 60px;
        text-align: center;
    }
    .members{
        text-align: center;
        font-size: 45px;
    }
</style>

<header>
    @include('header')
</header>

<section>
<h2>Вход</h2>
    <p class="members">Только для членов организации</p>
    <div>
        <div>
            <p>Введите вашу почту</p>
            <input type="email" placeholder="Ваш E-mail">
        </div>
        <div>
            <p>Введите ваш пароль</p>
            <input type="email" placeholder="Ваш пароль">
        </div>
    </div>
</section>

<footer>
    @include('footer')
</footer>
