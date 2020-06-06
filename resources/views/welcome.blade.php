<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <title>Places</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group">
                          <label for="inputName">Название:</label>
                          <input type="text" class="form-control" id="inputName" placeholder="Название...">
                        </div>
            
                        <div class="form-group">
                            <label for="inputLongitude">Долгота:</label>
                            <input type="text" class="form-control" id="inputLongitude" placeholder="Долгота...">
                        </div>
            
                        <div class="form-group">
                            <label for="inputLatitude">Широта:</label>
                            <input type="text" class="form-control" id="inputLatitude" placeholder="Широта...">
                        </div>
            
                        <div class="form-group">
                            <label for="inputPopulation">Население:</label>
                            <input type="text" class="form-control" id="inputPopulation" placeholder="Население...">
                        </div>
                        <button class="btn btn-primary">
                            <span>Добавить</span>
                            <div class="spinner hidden"></div>
                        </button>

                        <div class="alert alert-success hidden" role="alert">
                            Запрос проведён успешно! <br>
                            Перезагрузите страницу для того чтобы увидеть обновлённую таблицу
                          </div>
                        <div class="alert alert-danger hidden" role="alert">
                            Запрос не выполнен!
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        @if(count($places))
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Широта</th>
                                    <th scope="col">Долгота</th>
                                    <th scope="col">Население</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($places as $place)
                                    <tr>
                                        <td>{{ $place->name }}</td>
                                        <td>{{ $place->longitude }}</td>
                                        <td>{{ $place->latitude }}</td>
                                        <td>{{ $place->population }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/index.js')}}"></script>
</html>
