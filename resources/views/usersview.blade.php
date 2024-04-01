

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Document</th>
            <th>Fullname</th>
            <th>Age</th>
            <th>Created</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->document }}</td>
            <td>{{ $user->fullname }}</td>
            <td>{{ Carbon\Carbon::parse($user->birthdate)->diffforhumans()}}</td>
            <td>{{ Carbon\Carbon::parse($user->created_at)->diffforhumans()}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
