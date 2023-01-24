<x-layout>
    <section class="flex flex-col">
        <h1>Tag edit {{ $tag->id }}</h1>
        <div>
            <form action="{{ route('admin.project.tag.update', $tag->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">
                    <div class="flex flex-row">
                        <label for="tag_title">Введите название категории</label>
                        <input type="text" name="tag_title" value="{{ $tag->tag_title }}">
                        <input type="submit" value="Save">
                    </div>
                    @error('tag_title')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
    </section>
</x-layout>
