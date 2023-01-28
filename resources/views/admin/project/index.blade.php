<x-layout>
    <section class="flex flex-col">
    <h1>Project</h1>
        @forelse($projects as $project)
            <div>
                <h3>
                    {{ $project->title }}
                </h3>
                @isset($project->description)
                    <div>
                        {{ $project->description }}
                    </div>
                @endisset
                @isset($project->link)
                    <p>See the <a href="{{ url($project->link) }}" target="_blank">link</a></p>
                @endisset
            </div>
        @empty
            <div>
                <p>There are no projects</p>
                <p><a href="{{ route('admin.project.create') }}">Add new project</a></p>
            </div>
        @endforelse
    </section>
</x-layout>
