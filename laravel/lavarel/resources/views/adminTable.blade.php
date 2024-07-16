<div class="table">
    <table>
        <tr>
            <th>Name:</th>
            <th>Description:</th>
            <th>Finished?</th>
            <th>Location:</th>
            <th>ID:</th>
            <th>Actions:</th>
        </tr>

        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{!! $project->isFinished() ? "<p id='green'>Yes</p>" : "<p id='red'>No</p>" !!}</td>
                <td><a href='{{ $project->location }}'>Visit Project</a></td>
                <td>{{ $project->id }}</td>
                <td id="buttons">
                    <button onclick="showUpdate({{ $project->id }})" id="updateButton">
                        <span class="material-symbols-outlined">edit
                        </span></button>
                    <button onclick="showDelete({{ $project->id }})" id="deleteButton">
                        <span class="material-symbols-outlined">delete</span>
                    </button>
                </td>
            </tr>
        @endforeach
    </table>
</div>