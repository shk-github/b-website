<section class="articlesSection">
    <h2 class="articlesSection__title">What i did</h2>

    <div class="articlesSection__wrapper">

        @foreach ($articles as $article)
            
            @include('homepage.article', [
                'link' => $article->link,
                'imgPrev' => $article->imgPrev,
                'title' => $article->title,
                'desc' => $article->desc
            ])

        @endforeach

    </div>
</section>