

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Kind</th>
            <th>Breed</th>
            <th>location</th>
        </tr>
    </thead>
   @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id}}</td>
            <td>{{$pet->name}}</td>
            <td>{{$pet->kind}}</td>
            <td>{{$pet->bread}}</td>
            <td>{{$pet->location}}</td>
        </tr>

    @endforeach
</table>


