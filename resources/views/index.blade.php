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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <!-- Favicon -->
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="/"><img src="{{ asset('Group 1Logo.svg') }}" alt="Learner Logo" class="logo"></a>
        </div>
        <div class="nav-login"><a class="text-white" href="{{ route('login') }}">Login &nbsp<i class="fa-solid fa-circle-user icon"></i></a></div>
    </nav>

    <section id="home-articles">
        <div class="home-article-container">
            <h2 class="text-white">The Latest Articles :</h2>
            <hr class="tophr">
            <!-- foreach article -->
            @foreach ($articles as $article)
                <a href="{{ route('view_article', $article->id) }}">
                    <div class="article-full">
                        <div class="article-text">
                            <h1 class="text-white">{{ $article->article_title }}</h1>
                            <p class="text-white">Description 1 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda maiores consequatur placeat nobis doloribus quod quaerat iusto perferendis, est dolores at quia obcaecati asperiores nostrum rerum facere aut, aliquam perspiciatis?</p>
                        </div>
                        <img class="article-img" src="https://img.jakpost.net/c/2019/03/02/2019_03_02_66706_1551461528._large.jpg" alt="Article Image">
                    </div>
                    <hr class="tophr">
                </a>
            @endforeach
            <!-- foreach end -->

            <!-- pagination -->
            <div class="pagination-container">
                <div class="pagination">
                    <button class="pagination-btn text-white"><</button>
                    <p class="text-white">&nbsp1&nbsp</p>
                    <button class="pagination-btn text-white">></button>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
