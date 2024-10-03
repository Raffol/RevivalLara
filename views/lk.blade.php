<style>
    img{
        height: 200px;
    }
    .welcome{
        display: flex;
    }
</style>

<header>
    @include('header')
</header>


    <section style="display: flex; gap: 20px">
        <img src="{{asset('img/123.png')}}" alt="">
        <div class="welcome" style="display: flex">
            <h2>
                Добро пожаловать, пользователь!
{{--                Welcome, {{$user->name}}--}}
            </h2>
            <p>
{{--                Email: {{$user->email}}--}}
            </p>
            <h2></h2>
        </div>
    </section>


<footer>
    @include('footer')
</footer>
