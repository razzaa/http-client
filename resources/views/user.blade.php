<table border="2">

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
    </tr>
    @foreach ($collection as $item)
        <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td>
            <img src={{$item['avatar']}} alt="avatar">
          </td>
        </tr>
    @endforeach
</table>