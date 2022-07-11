<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kategori</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $k => $v)
        <tr>
            <td>{{ ++$k }}</td>
            <td>{{ $v->category->name }}</td>
            <td>{{ $v->title }}</td>
            <td>{{ $v->slug }}</td>
        </tr>
        @endforeach
    </tbody>
</table>