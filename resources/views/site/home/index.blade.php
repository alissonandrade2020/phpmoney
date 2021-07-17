<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PicPay - Desafio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #696969;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ route('admin.home') }}">Home</a>
                    <a href="{{ route('profile') }}">Meu Perfil</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                        <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                            <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <a href="https://picpay.com/site?gclid=Cj0KCQjw5uWGBhCTARIsAL70sLJtsWu5qHuDvaKUOZbj5Ys0Kp6nH2VjkacGn8KPUfbmL4wUO8_WZBkaAoE4EALw_wcB"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 984.47 317.57"><title>picpay-44</title><path d="M208.51,595.65h46V461.48h-46Zm61.92-225.47h-31v31h31ZM96.56,385.26H52.1v38.91H93.39c26.2,0,41.28,12.7,41.28,36.52S119.59,498,93.39,498H52.1V425h-46V595.65h46V536.9H95.77c53.19,0,84.16-28.58,84.16-77.8C179.93,413.05,149.76,385.26,96.56,385.26Zm204.84-46H208.51V432.1H301.4Zm-15.09,77H224.39V354.3h61.92Zm269.94-31H514.17v38.91h39.69c26.2,0,41.29,12.7,41.29,36.52S580.06,498,553.86,498H514.17V425h-46V595.65h46V536.9h42.08c53.19,0,84.15-28.58,84.15-77.8C640.4,413.05,609.44,385.26,556.25,385.26Zm386.64,49.23-39.7,100-39.7-100H815.86l63.51,161.16-24.61,61.13h48.43l87.33-222.29Zm-206.42-.8c-27.79,0-49.23,6.35-73.05,18.26l14.3,31.76c16.67-9.53,33.34-14.29,48.42-14.29,22.23,0,33.35,9.53,33.35,27v3.18H715c-39.7,0-61.13,18.26-61.13,48.43,0,29.37,20.64,50,55.57,50,22.23,0,38.11-7.93,50.81-21.43v17.46h45.26V489.27C804,455.13,779.34,433.69,736.47,433.69Zm27,108c-4.76,13.49-18.26,24.61-37.32,24.61-15.87,0-25.4-7.94-25.4-20.64s8.73-18.26,26.2-18.26h36.52ZM372.05,560.72c-22.23,0-38.1-17.47-38.1-43.67,0-25.4,15.87-42.87,38.1-42.87,15.88,0,27.79,6.35,36.53,17.47l31-22.23c-14.29-21.44-38.9-34.14-69.87-34.14-48.43-.79-81.77,32.55-81.77,81.77s33.34,81.78,81.77,81.78c33.35,0,58-13.5,71.46-35.73l-31.76-21.43C401.43,554.37,388.73,560.72,372.05,560.72Z" transform="translate(-6.06 -339.22)" fill="#21c25e"/></svg>
                            </g>
                        </svg>
                    </div> 
                </div>
                <br>

                <div class="links">
                    <a href="https://github.com/alissonandrade2020/phpmoney">Repositório</a>
                    <br>
                    <br>
                    <a href="https://github.com/alissonandrade2020">Github</a>
                    <br>
                    <br>
                    <a href="https://www.linkedin.com/in/alisson-de-andrade-ara%C3%BAjo-160224190">Linkedin</a>
                    <br>
                    <br>
                    <a href="http://alissondeandradearaujo.000webhostapp.com">Meu portfólio</a>
                </div>
            </div>
        </div>
    </body>
</html>