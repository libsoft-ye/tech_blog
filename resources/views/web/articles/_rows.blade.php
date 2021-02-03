<tr>
    <td class="text-center">{{ $loop->iteration }}</td>
    <td><a href="{{ route('articles.show', $article->id) }}" title="عرض الصفحة">{{ $article->title }}</a></td>
    <td>
        @if($article->category)
            <a href="{{ route('articles.index', ['category'=>$article->category_id]) }}">{{ $article->category->name }}</a>
        @endif
    </td>
    <td dir="ltr">
        <span title="{{ $article->created_at }}">{{ $article->created_at->diffForHumans() }}</span>
    </td>
    <td>
        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-default btn-sm" title="عرض الصفحة"><i class="fa fa-eye"></i></a>
    </td>
</tr>

