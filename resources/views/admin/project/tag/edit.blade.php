<x-layout>
    <section class="flex flex-col">
        <h1>Tag edit {{ $tag->id }}</h1>
        <div>
            <form action="{{ route('admin.project.tag.update', $tag->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">
                    <div class="flex flex-row">
                        <label for="tag_title">Tag title: </label>
                        <input type="text" name="title" value="{{ $tag->title }}">
                        <input type="submit" value="Save">
                    </div>
                    @error('title')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            </form>
        </div>
    </section>
</x-layout>
