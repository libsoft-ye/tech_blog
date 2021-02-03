<tr>
    <td class="text-center">{{ $loop->iteration }}</td>
    <td>{{ $article->title }}</td>
    <td>
        @if($article->category)
            <a href="{{ route('articles.index', ['category_id'=>$article->category_id]) }}">{{ $article->category->name }}</a>
        @endif
    </td>
    <td>{{ ($article->is_active == 1 ? 'yes' : 'no') }}</td>
    <td dir="ltr">
        <span title="{{ $article->created_at }}">{{ $article->created_at->diffForHumans() }}</span>
    </td>
    <td>
        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-default btn-sm" title="عرض الصفحة"><i class="fa fa-eye"></i></a>
        <span id="is_active_for_change_{{ $article->id }}">
            @if($article->is_active ==1)
                <button class="btn btn-success btn-sm" onclick="change_is_active(this, '{{ $article->id }}', 0);">
                                                <i class="fa fa-check"></i>
                                            </button>
            @else
                <button class="btn btn-warning btn-sm" onclick="change_is_active(this, '{{ $article->id }}', 1);">
                                                <i class="fa fa-eye-slash"></i>
                                            </button>
            @endif
                                        </span>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
        <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block" id="delete-article-{{ $article->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="button" onclick="deleteConfirm('delete-article-{{ $article->id }}');" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i></button>
        </form><!-- end of form -->
    </td>
</tr>

