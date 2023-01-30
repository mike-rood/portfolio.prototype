<x-layout>
    <section class="flex flex-row">
    <h1>Project</h1>
        @forelse($projects as $project)
            <div class="flex flex-col">
                <h3>
                    {{ $project->title }}
                </h3>
                <div>
                    {{ $project->category->title }}
                </div>
                <div>
                    {{ $project->description }}
                </div>
                @isset($project->link)
                    <p>Перейти к сайту: <a href="{{ url($project->link) }}" target="_blank">{{ $project->link }}</a></p>
                @endisset
            </div>
        @empty
            <div>
                <p>There are no projects</p>
            </div>
        @endforelse
        <p><a href="{{ route('admin.project.create') }}">Add new project</a></p>
    </section>
</x-layout>
