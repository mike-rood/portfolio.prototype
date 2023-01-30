<x-layout>
    <section class="flex flex-col">
        <div class="flex flex-row">
            <h1>Category # {{ $category->id }}</h1>
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
        <div>
            <p>{{ $category->title }}</p>
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <p>{{ $category->description }}</p>
            @error('description')
            <p>{{ $message }}</p>
            @enderror
        </div>

    </section>
</x-layout>
