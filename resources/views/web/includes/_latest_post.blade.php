<div class="latest_post">
  <h2><span>Latest post</span></h2>
  <div class="latest_post_container">
    <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
    <ul class="latest_postnav">
      @if(isset($main_data))
        @foreach($main_data['latest_articles'] as $l_article)
          <li>
            <div class="media"> 
                <a href="{{ route('articles.show', $l_article->id) }}" class="media-left"> 
                  <img alt="" src="{{ asset($l_article->image ?? 'web/images/post_img1.jpg') }}"> 
                </a>
                <div class="media-body"> 
                  <a href="{{ route('articles.show', $l_article->id) }}" class="catg_title"> {{ $l_article->title }} </a> 
                </div>
            </div>
          </li>
        @endforeach
      @endif
    </ul>
    <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
  </div>
</div>
