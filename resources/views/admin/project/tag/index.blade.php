<x-layout>
    <section class="flex flex-col">
        <h1>Tag</h1>
        @forelse($tags as $tag)
            <div class="flex flex-row">
                <div>
                    {{ $tag->title }}
                </div>
                <div>
                    <a href="{{ route('admin.project.tag.edit', $tag->id) }}">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                </div>
                <div>
                    <form action="{{ route('admin.project.tag.delete', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p>No tags yet</p>
        @endforelse
        <form action="{{ route('admin.project.tag.store') }}" method="POST">
            @csrf
            <div class="flex flex-row">
                <label for="title">Add tag: </label>
                <input type="text" name="title">
                <input type="submit" value="Сохранить">
            </div>
            @error('title')
            <p>{{ $message }}</p>
            @enderror
        </form>
    </section>
</x-layout>
