<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="page bg-light inline-block">
        <header class="color">
            <nav class="navbar navbar-light bg-dark justify-content-lg-between py-3">
                <div class="container-fluid">
                  <a class="navbar-brand text-light" href="/dashboard">
                    <img src="/img/magister.png" alt="Logo Magister" width="35" height="30" class="d-inline-block align-text-top">
                    Magister
                  </a>
                  <div class="navigations mx-2">
                    <a href="/dashboard" class="text-light mx-3">
                        Documentos
                    </a>
                    <a href="/document/create" class="text-light">
                        Enviar Documento
                    </a>
                  </div>
                </div>
              </nav>
        </header>
        <main>
            <div class="">
                @yield('content')
            </div>
        </main>
        {{-- <footer>
            <div class="footer d-flex bg-dark justify-content-center font-weight-bold mt-4 py-2 text-light">
                <span class="">Magister - 2021</span>
            </div>
        </footer> --}}
    </div>
</body>
</html>