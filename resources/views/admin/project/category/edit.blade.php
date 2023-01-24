<x-layout>
    <section class="flex flex-col">
        <h1>Category edit {{ $category->id }}</h1>
        <div>
            <form action="{{ route('admin.project.category.update', $category->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <div>
                        <label for="category_title">Введите название категории</label>
                        <input type="text" name="category_title" value="{{ $category->category_title }}">
                    </div>
                    @error('category_title')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <div>
                        <label for="category_title">Введите описание категории</label>
                        <input type="text" name="category_title" value="{{ $category->category_description }}">
                    </div>
                    @error('category_descroption')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </section>
</x-layout>
