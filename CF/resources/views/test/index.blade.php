<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$article -> title}}</title>
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
</head>
<body>

    <h1>{{ $article -> title }}</h1>
    <hr>

    {{$article->content}}
   
    <hr>
    {{$article->user->name}} | {{$article->category->name}}

    @foreach($article->tags as $tag )
        {{ $tag->name }}
    @endforeach 

</body>
</html>
