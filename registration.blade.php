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
        border: 3px solid green;
        padding: 0 20px;
    }
    form{
        display: grid;
        gap: 10px;
    }
    label{
        text-align: center;
        font-size: 20px;
    }
    button{
        font-size: x-large;
        background-color: green;
        color: white;
        border-radius: 15px;
        margin-left: 25px;
        padding: 10px;
    }
</style>

    @include('header')


<section>
    <h2>Регистрация для новых участников сообщества</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Ваше имя:</label>
        <input type="text" name="name" required>
        <label>Ваш логин:</label>
        <input type="text" name="name" required>
        <label>Ваша электронная почта:</label>
        <input type="email" name="email" required>
        <label>Ваш номер телефона:</label>
        <input type="number" name="phone" required>
        <label>Ваш пароль:</label>
        <input type="password" name="password" required>
        <label>Подтвердите пароль:</label>
        <input type="password" name="password_confirmation" required>
        <button type="submit">Зарегистрироваться</button>
    </form>

    {{--
        <div>
            <h2>Регистрация для новых участников сообщества</h2>
            <div class="reg" >
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
    --}}
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


    @include('footer')

