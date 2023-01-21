<x-layout>
    <h1>Category</h1>
    @forelse($categories as $category)
        <ul>
            <li>
                <div>
                <div>
                    {{ $category->category_title }}
                </div>
                <div>
                    {{ $category->category_description }}
                </div>
                </div>
            </li>
        </ul>
    @empty
        <p>No categories yet</p>
    @endforelse
    <div>
        <a href="{{ route('admin.project.category.create') }}">Добавить новую категорию</a>
    </div>
</x-layout>
