<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learner</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- stylesheet -->
    <link rel="stylesheet" href=" {{asset('css/view-article.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/universal.css')}} ">
    <!-- Favicon -->
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="/"><img src="{{ asset('Group 1Logo.svg') }}" alt="Learner Logo" class="logo"></a>
        </div>
        <div class="nav-login"><a class="text-white" href="{{ route('login') }}">Login &nbsp<i class="fa-solid fa-circle-user icon"></i></a></div>
    </nav>

    <section id="view-article">
        <div class="article-container">
            <h1 class="text-white article-title">{{ $article->article_title }}</h1>
            <hr>
            <div class="article-content">
                <div class="article-text">
                    <div id="article_body">{{ $article->article_body }}</div>
                </div>
            </div>

        </div>
    </section>
</body>

<script src="{{ asset('js/DOMParse.js') }}"></script>
</html>
