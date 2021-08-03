<h1>Welcome</h1>




<table border="1px">
    <tr>
        <td colspan="3" style="padding: 10px;">

            <a href="/insert"><button style="width: 100%">Insert</button></a>

        </td>
    </tr>
    @if (session('name'))
        <tr>
            <td colspan="3">
                <p style="padding: 15px;color: white;background: green;text-align: center">

                    {{ session('name') }}
                </p>
            </td>
        </tr>
    @endif
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
