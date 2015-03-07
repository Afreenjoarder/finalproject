<h2>{{ $voter->voterName }}</h2>

    <ul>
        @foreach( $project->tasks as $task )
            <li><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></li>
        @endforeach
    </ul>
@endif