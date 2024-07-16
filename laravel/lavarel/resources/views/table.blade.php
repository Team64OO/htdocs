<div class="table">
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Finished?</th>
            <th>Location</th>
        </tr>

        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{!! $project->isFinished() ? "<p id='green'>Yes</p>" : "<p id='red'>No</p>" !!}</td>
                <td><a href='{{ $project->location }}'>Visit Project</a></td>
            </tr>
        @endforeach
    </table>
</div>