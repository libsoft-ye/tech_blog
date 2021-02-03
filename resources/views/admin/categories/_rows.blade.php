<tr>
    <td class="text-center">{{ $loop->iteration }}</td>
    <td>{{ $category->name }}</td>
    <td>
        @if($category->parent)
            <a href="{{ route('categories.index', ['parent'=>$category->id]) }}">{{ $category->parent->name }}</a>
        @endif
    </td>
    <td>{{ ($category->is_active == 1 ? 'yes' : 'no') }}</td>
    <td dir="ltr">
        <span title="{{ $category->created_at }}">{{ $category->created_at->diffForHumans() }}</span>
    </td>
    <td>
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display: inline-block" id="delete-category-{{ $category->id }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button type="button" onclick="deleteConfirm('delete-category-{{ $category->id }}');" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i></button>
        </form><!-- end of form -->
    </td>
</tr>

