<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                flex-direction: column;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            form {
                display: flex;
                flex-direction: column
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>Aggiungi un film</h1>
            <form action="{{route("movie.store")}}" method="post">
                @method("POST")
                @csrf
               <label for="titolo">Titolo del Film</label>
               <input type="text" name="titolo" id="titolo">
               <label for="regista">Regista</label>
               <input type="text" name="regista" id="titolo">
               <div>
                   <button type="submit">Aggiungi Nuovo Film</button>
               </div>
            </form>

        </div>
    </body>
</html>