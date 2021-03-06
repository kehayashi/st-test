<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                color: #636b6f;
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

            <div class="content">
                <div class="title m-b-md">
                    Teste
                </div>

                <div class="links">
                    <form action="/arquivo" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="file" name="arquivo" accept="xlsx/xls" />

                        <br><br>

                        @foreach ($attribute1 as $at)
                          {{ $at->name }}
                          <select name="{{ $at->name }}">
                              <option value="null">Selecione</option>
                              <option value="{{ $at->sorting1 }}">{{ $at->sorting1 }}</option>
                              <option value="{{ $at->sorting2 }}">{{ $at->sorting2 }}</option>
                          </select>
                        @endforeach

                        @foreach ($attribute2 as $at)
                          {{ $at->name }}
                          <select name="{{ $at->name }}">
                              <option value="null">Selecione</option>
                              <option value="{{ $at->sorting1 }}">{{ $at->sorting1 }}</option>
                              <option value="{{ $at->sorting2 }}">{{ $at->sorting2 }}</option>
                          </select>
                        @endforeach

                        @foreach ($attribute3 as $at)
                          {{ $at->name }}
                          <select name="{{ $at->name }}">
                              <option value="null">Selecione</option>
                              <option value="{{ $at->sorting1 }}">{{ $at->sorting1 }}</option>
                              <option value="{{ $at->sorting2 }}">{{ $at->sorting2 }}</option>
                          </select>
                        @endforeach

                        <br><br>

                        <button type="submit">Enviar arquivo</button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
