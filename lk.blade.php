<style>
    img{
        height: 300px;

    }
    .welcome{
        display: flex;
        margin-left: 250px;
        margin-top: 150px;
        margin-bottom: 150px;

    }
    td{
        font-size: 30px;
    }
    tr{
        gap: 10px;
    }
</style>

    @include('header')

    <section style="display: flex; gap: 20px; {{--padding-bottom: 360px;--}}">
{{--        <img src="{{asset('img/123.png')}}" alt="">--}}
        <div class="welcome">
{{--            <h2>--}}
{{--                Добро пожаловать, пользователь!--}}
{{--                Здравствуйте, {{$user->name}}--}}
{{--            </h2>--}}
            <p>
{{--                Email: {{$user->email}}--}}
            </p>
            <h2></h2>
            <table>
{{--                <thead>--}}
{{--                <h2>Здравствуйте, --}}{{--</h2>--}}
{{--                </thead>--}}
                <tr >
                    <td>
                        <img src="{{asset('img/123.png')}}" alt="" >
                    </td>
                    <td>
                        <p>Здравствуйте, Ерёменко Денис{{--{{$user->name}}--}}</p>
                        <p>Роль: <span>Фотограф, админ{{--{{$user->role}}--}}</span></p>
                        <p>Контакты: <span>88005553535{{--{{$user->phone, email}}--}}</span></p>
                    </td>
                </tr>

            </table>
        </div>
    </section>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

    @include('footer')

