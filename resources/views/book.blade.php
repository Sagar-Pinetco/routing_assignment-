<h2>Book Dashboard</h2>
@if (session('success'))
    <center>
        <h5 style="padding: 15px;background: skyblue;color: white;width: 25%">{{ session('success') }}</h4>
    </center>
@endif
@if (session('delete'))
    <center>
        <h5 style="padding: 15px;background: red;color: white;width: 25%">{{ session('delete') }}</h4>
    </center>
@endif

<a href="{{ url('books/create') }}"
    style="padding: 10px;width: 15%;text-align: center;text-decoration: none;color: black;background: brown;margin: 25px">Add
    Book</a>
<br>
<br>
<br>

<form  action="{{ route('books.index') }}" method="GET">
    {{-- @csrf --}}
    <input type="text"  name="search"  placeholder="Search.."/>
    <button type="submit">Search</button>
    </form>

    <br>
    <br>




<table border="1px" style='width:auto;display:inline-block'>
    <tr>
        <td>Name</td>
        <td>Author</td>
        <td>Type</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach ($list as $data)
        <tr>
            <td>{{ $data->book_name }}</td>
            <td>{{ $data->book_author }}</td>
            <td>{{ $data->book_type }}</td>
            <td>{{ $data->book_price }}</td>
            <td>
                {{-- <a href="{{ route('books'.$data->id.'edit') }}">  <button>Update</button></a> --}}
                <a href="{{ url('books/' . $data->id . '/edit') }}"> <button>Update</button></a>
                <form action="{{ url('books/'.$data->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </table>

    {{ $list->links() }}
