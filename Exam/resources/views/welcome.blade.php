<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Scripts -->

    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body>
<div id="app">
    <main class="container">
        <form action="{{ route('library') }}">
            <div class="form-group">
                <label for="exampleInputEmail1">Book Name</label>
                <input type="text" class="form-control"  placeholder="Enter Name" name="title">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">bookid</th>
                <th scope="col">Authorid</th>
                <th scope="col">Title</th>
                <th scope="col">ISBN</th>
                <th scope="col">Pub_year</th>
                <th scope="col">Available</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($Books as $book)
                <tr>
                    <th scope="row">{{$book->bookid}}</th>
                    <td>{{$book->authorid}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->pub_year}}</td>
                    <td>{{$book->available}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
