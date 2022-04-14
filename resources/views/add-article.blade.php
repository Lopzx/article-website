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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="draft_id" content="{{ $draft_id }}">
    <link rel="stylesheet" href="{{ asset('css/add-article.css') }}">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <!-- Favicon -->
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="/"><img src="{{ asset('Group 1Logo.svg') }}" alt="Learner Logo" class="logo"></a>
        </div>
    </nav>

    <section id="add-articles">
        <div class="add-container">
            <form action="{{ route('create_article') }}" method="POST">
                @csrf
                <div class="form-item">
                    <h6 class="text-white">Article Title :</h6>
                    <input name="article_title" type="text" class="form-input-article input-title" id="article-title-input">
                </div>
                <textarea name="article_content" id="article_content_text"></textarea>
                <div class="form-item">
                    <h6 class="text-white">Article :</h6>
                    <div contenteditable="true" id="article_body"></div>
                </div>
                <input id="create_article" type="submit" class="btn" value="Add Article">
            </form>
        </div>
    </section>
</body>

<script src="{{ asset('js/createArticleSystem.js') }}"></script>
</html>
