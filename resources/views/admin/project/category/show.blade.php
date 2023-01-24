<x-layout>
    <h1>Category # {{ $category->id }}</h1>
    <div>
        <div>
            {{ $category->category_title }}
        </div>
        <div>
            {{ $category->category_description }}
        </div>
    </div>
    <div>
        <div>
            <a href="{{ route('admin.project.category.edit', $category->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
        </div>
        <div>
            <form action="{{ route('admin.project.category.delete', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <i class="fa-regular fa-trash-can"></i>
                </button>
            </form>
        </div>
    </div>
</x-layout>
