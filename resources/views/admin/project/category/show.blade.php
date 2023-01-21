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
        <a href="{{ route('admin.project.category.edit', $category->id) }}">Edit</a>
    </div>
</x-layout>
