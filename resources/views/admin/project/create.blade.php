<x-layout>
    <section class="flex flex-col">
        <h1>Project Create</h1>
        <form action="{{ route('admin.project.store') }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <label for="title">Введите назватие проекта:</label>
                    @error('title')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <input type="text" name="title" value="{{ old('title') }}">
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <label for="category_id">Выберите категорию</label>
                @error('category_id')
                <div>
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div>
                    <select name="category_id">
                        <option disabled selected>-----</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <label for="description">Введите описание проекта:</label>
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <input type="textarea" name="description" value="{{ old('description') }}">
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <label for="link">Введите ссылку на проект:</label>
                    @error('link')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <input type="text" name="link" value="{{ old('link') }}">
            </div>
            <div>
                <input type="submit" value="Сохранить">
            </div>
        </form>
    </section>
</x-layout>
