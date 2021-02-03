<section id="navArea">
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav main_nav">
        <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
        @if(isset($main_data))
          @foreach($main_data['categories'] as $category)
            @if($category->children)
              <li class="dropdown"> 
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">{{ $category->name }}</a>
                <ul class="dropdown-menu" role="menu">
                  @foreach($category->children as $child)
                    <li><a href="{{ route('articles.index', ['category'=>$child->id]) }}">{{ $child->name }}</a></li>
                  @endforeach
                </ul>
              </li>              
            @else
              <li><a href="{{ route('articles.index', ['category'=>$category->id]) }}">{{ $category->name }}</a></li>
            @endif
          @endforeach
        @endif
      </ul>
    </div>
  </nav>
</section>
