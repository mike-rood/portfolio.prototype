<x-layout>
    <section class="flex flex-col">
        <h1>Category # {{ $category->id }}</h1>
        <div>
            {{ $category->category_title }}
        </div>
        <div>
            {{ $category->category_description }}
        </div>
        <div class="flex flex-row">
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
    </section>
</x-layout>
