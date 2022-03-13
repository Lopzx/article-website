<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('create_article')}}" method="POST">
        @csrf
        <label for="">Article Title: </label><br>
        <input type="text" name="article-title">
        <br>
        <br>
        <label for="">Article Image:</label><br>
        <input id="article-title" type="text" name="article-image">
        <br>
        <br>
        <div id="hidden_file">
        </div>
        <label for="">Article Body:</label><br>
        <div id="article_body" contenteditable="true" class="div">
            Change me
        </div>
        <br>
        <br>
        <button type="submit">Create Article</button>
    </form>
</body>
<script src="{{asset('js/createArticleSystem.js')}}"></script>
</html>
