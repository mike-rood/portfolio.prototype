<x-layout>
    <section class="flex flex-col">
        <h1>Category Create</h1>
        <form action="{{ route('admin.project.category.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_title">Введите назватие категории: </label>
            <input type="text" name="category_title">
            @error('category_title')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="category_description">Введите описание категории: </label>
            <input type="textarea" name="category_description">
        </div>
        <div>
            <input type="submit" value="Сохранить">
        </div>
    </form>
    </section>
</x-layout>
