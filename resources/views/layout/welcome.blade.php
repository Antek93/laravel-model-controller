<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Model Controller</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between">
                            @foreach($movies as $movie)
                            <div>
                                <div class="movieContainer">
                                    {{ $movie['title'] }}
                                </div>
                                <div class="movieContainer">
                                    {{ $movie['original_title'] }}
                                </div>
                                <div class="movieContainer">
                                    {{ $movie['nationality'] }}
                                </div>
                                <div class="movieContainer">
                                    {{ $movie['date'] }}
                                </div>
                                <div class="movieContainer">
                                    {{ $movie['vote'] }}
                                </div>
                            </div>
                        
    
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
