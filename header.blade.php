<style>
    header{
        background-color: green;
        color: white;
    }
    nav{
        display: flex;
        gap: 10px;
        padding: 30px;
        margin-left: 10px;
        border: 30px;
    }
    .news, .organizers, .about, .events, .projects, .ourgames, .registration, .entrance{
        padding: 10px;
        margin: 15px;
        background-color: #aba244;
        border-radius: 10px 30px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .news:hover, .organizers:hover, .about:hover, .events:hover, .projects:hover, .ourgames:hover, .registration:hover, .entrance:hover{
        background-color: #e59213;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
</style>
<header>
    <nav>

        <div><a href="" class="news" src="">Новости</a></div>
        <div><a href="" class="organizers" src="">Организаторы</a></div>
        <div><a href="" class="about" src="">О нас</a></div>
        <div><a href="" class="events" src="">Мероприятия</a></div>
        <div><img src="{{asset('img/Возрождение.png')}}" alt="<<ИРОО Возрождение>>" style="width: 300px; height: 100px;"></div>
        <div><a href="" class="projects" src="">Наши проекты</a></div>
        <div><a href="" class="ourgames" src="">Список Игр</a></div>
        <div><a href="" class="registration" src="">Регистрация</a></div>
        <div><a href="" class="entrance" src="">Вход</a></div>

    </nav>
</header>

