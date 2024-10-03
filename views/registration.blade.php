<style>
    h2{
        font-size: 60px;
        text-align: center;
    }
    section{
        margin: 70px 300px;
    }
    .reg{
        font-size: 20px;
    }
</style>
<header>
    @include('header')
</header>

<section>
    <div>
        <h2>Регистрация для новых участников сообщества</h2>
        <div class="reg">
        <div >
            <p>E-mail:</p>
            <input type="placeholder" placeholder="Введите вашу электронную почту">
        </div>
        <div>
            <p>Ваше имя</p>
            <input type="placeholder" placeholder="Введите ваше имя">
        </div>
        <div>
            <p>Вашa конфиденциальность</p>
            <input id="password-input" type="password" placeholder="Введите ваш пароль">
            <label><input type="checkbox" class="password-checkbox"> Показать пароль</label>
        </div>
        <div>
            <p>Ваше телефон</p>
            <input type="placeholder" placeholder="Введите ваш номер телефона">
        </div>
        </div>
    </div>
</section>

{{--<script>
    $('body').on('click', '.password-checkbox', function(){
        if ($(this).is(':checked')){
            $('#password-input').attr('type', 'text');
        } else {
            $('#password-input').attr('type', 'password');
        }
    });
</script>--}}

<footer>
    @include('footer')
</footer>
