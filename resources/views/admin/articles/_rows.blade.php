<tr>
    <td class="text-center">{{ $rowidParent++ }}</td>
    <td>{{ $article->name }}</td>
    <td>
        <a href="{{ route('admins.categories.show', $article->cat_id) }}">{{ $article->category->name }}</a>
    </td>
    <td>{{ ($article->is_active == 1 ? 'yes' : 'no') }}</td>
    <td dir="ltr">
        <span title="{{ $article->created_at }}">{{ $article->created_at->diffForHumans() }}</span>
    </td>
    <td>
        <a href="{{ route('admins.articles.show', $article->id) }}" class="btn btn-default btn-sm" title="عرض الصفحة"><i class="fa fa-eye"></i></a>
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
        <a href="{{ route('admins.articles.edit', $article->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
        <form action="{{ route('admins.articles.destroy', $article->id) }}" method="post" style="display: inline-block" id="delete-article-{{ $article->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="button" onclick="deleteConfirm('delete-article-{{ $article->id }}');" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i></button>
        </form><!-- end of form -->
    </td>
</tr>

