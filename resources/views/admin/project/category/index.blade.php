<x-layout>
    <section class="flex flex-col">
        <h1>Category</h1>
        @forelse($categories as $category)
            <ul>
                <li>
                    <div class="flex flex-row">
                        <div>
                            <p>{{ $category->title }}</p>
                        </div>
                        <div>
                            <a href="{{ route('admin.project.category.edit', $category->id) }}"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
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
                        <p>{!! $category->description !!}</p>
                    </div>
                </li>
            </ul>
        @empty
            <p>No categories yet</p>
        @endforelse
        <div>
            <a href="{{ route('admin.project.category.create') }}">Добавить новую категорию</a>
        </div>
    </section>
</x-layout>
