<x-layout>
    <section class="flex flex-col">
        <h1>Project Create</h1>
        <form action="{{ route('admin.project.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Введите назватие проекта: </label>
                <input type="text" name="title">
                @error('title')
                {{ $message }}
                @enderror
            </div>
            <div>
                <label for="description">Введите описание проекта: </label>
                <input type="textarea" name="description">
            </div>
            <div>
                <label for="link">Введите ссылку на проект: </label>
                <input type="text" name="link">
            </div>
            <div>
                <input type="submit" value="Сохранить">
            </div>
        </form>
    </section>
</x-layout>
