<article class="article">
    <a href="{{$link}}" title="{{$title}}" class="article__imgWrap">
        <img src="{{ URL::asset('images/'.$imgPrev) }}" alt="{{$title}}" loading="lazy" class="article__imgWrap__img">
    </a>
    <div class="article__textWrap">
        <h2 class="article__title">
            <a href="{{$link}}" title="{{$title}}" class="article__link" >{{$title}}</a>
        </h2>
        <p class="article__desc">{{$desc}}</p>
    </div>
</article>