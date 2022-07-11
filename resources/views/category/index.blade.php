<table>
    <tr>
        <td>#</td>
        <td>Nama Kategory</td>
        <td>Slug</td>
    </tr>
    @foreach($cat as $k => $v)
    <tr>
        <td>{{ ++$k }}</td>
        <td>{{ $v['name'] }}</td>
        <td>{{ $v['slug'] }}</td>
        <td><a href="{{ url('category/edit/'. $v['id'] ) }}">Edit</a></td>
    </tr>
    @endforeach

</table>