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
    <link rel="stylesheet" href="{{ asset('css/user-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <!-- Favicon -->
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="/"><img src="{{ asset('Group 1Logo.svg') }}" alt="Learner Logo" class="logo"></a>
        </div>
    </nav>

    <section id="user-admin-page">
        <div class="user-admin-container">
            <div class="user-left">
                <div class="role-header">
                    <!-- user role (admin/user) -->
                    <h2 class="text-white">User</h2>
                    <hr>
                </div>
                <div class="name-controls">
                    <!-- username -->
                    <h2 class="text-white">Hi, {{ Auth::user()->name }}</h2>
                    <div class="panel-controls">
                        <a href="{{ route('create_draft') }}"><button class="btn"><i class="fa-solid fa-plus"></i>&nbspAdd Article</button></a>
                    </div>
                </div>
                <div class="article-box">
                    <div class="article-box-container">
                        <div class="article-box-header">
                            <h2>Recently Posted Articles By You :</h2>
                            <hr>
                        </div>
                        <!-- article -->
                        @if($articles->count() != 0)
                            @foreach ($articles as $article)
                                <div class="article-box-article">
                                    <div class="article-box-title-btn less-margin">
                                        <h2 class="article-box-title">{{ $article->article_title }}</h2>
                                        <div class="article-btn">
                                            <a href="{{ route('view_article',$article->id) }}"><button class="btn-square"><i class="fa-solid fa-eye text-white"></i></button></a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="{{ route('delete_article', $article->id) }}"><button class="btn-square"><i class="fa-solid fa-trash-can text-red"></i></button></a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        @else
                            No Article
                        @endif
                        <!-- end article -->
                    </div>
                </div>
            </div>
            <div class="user-right">
                <div class="user-details-card">
                    <div class="detail-header">
                        <h2 class="text-white card-header">Personal Details</h2>
                        <hr>
                    </div>
                </div>
                <div class="user-details">
                    <div class="user-detail">
                        <h6 class="text-white">Full Name :</h6>
                        <div class="detail-field">&nbsp {{ Auth::user()->name }}</div>
                    </div>
                    <div class="user-detail">
                        <h6 class="text-white">Username :</h6>
                        <div class="detail-field">&nbsp {{ Auth::user()->username }}</div>
                    </div>
                    <div class="user-detail">
                        <h6 class="text-white">Email :</h6>
                        <div class="detail-field">&nbsp {{ Auth::user()->email }}</div>
                    </div>
                    <div class="user-detail">
                        <h6 class="text-white">Phone Number :</h6>
                        <div class="detail-field">&nbsp {{ Auth::user()->phone_number }}</div>
                    </div>
                    <div class="user-detail">
                        <h6 class="text-white">Birth Date :</h6>
                        <div class="detail-field">&nbsp {{ Auth::user()->tanggal_lahir }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
