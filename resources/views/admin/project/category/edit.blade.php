<x-layout>
    <section class="flex flex-col">
        <h1>Category edit {{ $category->id }}</h1>
        <div>
            <form action="{{ route('admin.project.category.update', $category->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <div>
                        <label for="title">Введите название категории</label>
                        <input type="text" name="title" value="{{ $category->title }}">
                    </div>
                    @error('title')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <div>
                        <label for="description">Введите описание категории</label>
                        <input type="text" name="description" value="{{ $category->description }}">
                    </div>
                    @error('description')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </section>
</x-layout>
