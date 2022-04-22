<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chiwi Academy</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="https://laravel.com/img/logomark.min.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="h-screen bg-gray-300">

        <nav class="px-6 py-4 w-full bg-white flex flex-wrap justify-center space-y-5 md:justify-between md:space-y-0">
            <picture class="">
                <a class="flex flex-col justify-center items-center" href="/">
                    <img class="w-16" src="https://dsm01pap001files.storage.live.com/y4m4B-7iuyyEBb4izqOcWpbNVmgsBGYYpZiIx46pZ5hKwshsefzBtlynXLez0lBy6BzMrNWGKpCsaSKq8Eezsa-mqIeGUTGVqzd4zgf_QJkDyctZqNUUm9CfDwk7GrFyrAactXk2JqdHBKz0t7n13zhCgOUPfE0Yjzvt1scFmPj5uKZ9k38hkMMQhpsyB9jt3Gn?width=148&height=70&cropmode=none" alt="">
                    <span class="text-xs font-black">Academy</span>
                </a>
            </picture>
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="bg-blue-600 text-white font-semibold px-3 py-1 rounded-md mr-5">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="bg-teal-600 text-white font-semibold px-3 py-1 rounded-md">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        
        @yield('content')

        <div class="space">
        <footer class="footer fixed bottom-0 right-0 w-full mt-5 md:mt-0 bg-slate-600 p-3 text-white flex flex-wrap items-center justify-center gap-5">
        <div class="flex items-center gap-5">
            <img class="w-16 bg-white p-1 rounded-lg" src="https://dsm01pap001files.storage.live.com/y4m4B-7iuyyEBb4izqOcWpbNVmgsBGYYpZiIx46pZ5hKwshsefzBtlynXLez0lBy6BzMrNWGKpCsaSKq8Eezsa-mqIeGUTGVqzd4zgf_QJkDyctZqNUUm9CfDwk7GrFyrAactXk2JqdHBKz0t7n13zhCgOUPfE0Yjzvt1scFmPj5uKZ9k38hkMMQhpsyB9jt3Gn?width=148&height=70&cropmode=none" alt="">
            <p class="font-bold text-center">Copyright © 2022 - All right reserved</p>
        </div> 
        <div class="flex items-center gap-4">
            <a href="https://github.com/sarisp3260/Academy-Chiwi.git">
                <img class="w-8" src="https://dsm01pap001files.storage.live.com/y4mXCPNFHraIk4-gOxppJ_fL9lgnv0Mru2ocxbFSgbAhXyGUXSEua91VoHOobJj-E_VJhrlrU-rtcHjZns0Ln6WelOKlL1yRqGxdgqrJCmR0lyXSt50MtWXzZ3hL0ShrCPlQ27ERXWJLCvR6m-C-wvwu4pHNlN5IjtKP25f0XE_x2AlCeELL0pWAwxEYsWYIVzc?width=64&height=64&cropmode=none" alt="">
            </a> 
            <a href="https://educamas.com.co/">
                <img class="w-8" src="https://dsm01pap001files.storage.live.com/y4mOD_6FqFjS8lxeeEVdL-szQWVEWwNK0Ap47j_uG5nYO4syTk8oFhbjj5hOyPS3ePDlUXYtoDsK4j3EMUm4Rya15SKY2vhuDx6fkuKrWoim_9Yr2gztEDdsXb2o6-dg6QmgoiFVVPe7JJoOhB0xhMZZDd9YJP_T6jll711-HhzcoRq9cSlHZTeV-bsQgUqki6K?width=551&height=610&cropmode=none" alt="">
            </a>
            <a href="https://laravel.com/docs/9.x/installation">
                <img class="w-8 invert hue-rotate-60" src="https://laravel.com/img/logomark.min.svg" alt="">
            </a>
        </div>
        </footer>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
