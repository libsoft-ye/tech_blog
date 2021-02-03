<section id="newsSection">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="latest_newsarea"> <span>Latest Articles</span>
        <ul id="ticker01" class="news_sticker">
          @if(isset($main_data))
            @foreach($main_data['latest_articles'] as $l_article)
              <li><a href="{{ route('articles.show', $l_article->id) }}"><img src="{{ asset('web/images/news_thumbnail3.jpg') }}" alt="">{{ $l_article->title }}</a></li>
            @endforeach
          @endif
        </ul>
        <div class="social_area">
          <ul class="social_nav">
            @foreach(config('my_config.social_links') as $social)
              <li class="{{ $social['class'] }}"><a href="{{ $social['url'] }}"></a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
