<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- CDN Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        {{-- CDN css --}}
        <link href="{{ asset('style.css') }}" rel="stylesheet">
        <title>Contatti</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="row w-100 justify-content-center align-items-center">
                        <div class="col-8">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img class="width-img" src="data:image/jpeg;base64,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" alt="Laravel">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="col-4">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('contatti') }}">Contatti</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('chi_siamo') }}">Chi siamo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('documentazione') }}">Documentazione</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>  
            <div class="container">
                <h1>
                    Questa è la pagina dei contatti
                </h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>
                    Puoi contattarci ai seguenti numeri:
                </h2>
                <div>
                    <ul>
                        <li>
                            333-2000000
                        </li>
                        <li>
                            333-2000002
                        </li>
                        <li>
                            333-2000001
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>