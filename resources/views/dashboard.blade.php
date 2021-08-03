<h1>Welcome</h1>
@if (session('name'))

<span style="padding: 5px;color: white;background: green">

    {{ session('name') }}
</span>
@endif
<table border="1px">
    <tr>
        <td colspan="3">
            <a href="/insert"><button>Insert</button></a>

        </td>
    </tr>

    <tr>
        <td><b>Name</b></td>
        <td><b>Email Id</b></td>
        <td>Action</td>
    </tr>



    @foreach ($user as $u)
    <tr>
        <td>
            {{ $u->name }}</td>

        <td>
            {{ $u->email }}</td>
        <td>

            <a href="{{ url('update', ['id' => $u->id]) }}"><button>Update</button></a>
            <a href="{{ url('delete', ['id' => $u->id]) }}"><button>Delete</button></a>
        </td>
    </tr>

    @endforeach
</table>






