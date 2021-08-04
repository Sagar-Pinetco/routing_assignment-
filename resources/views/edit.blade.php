<div style="padding: 50px;background: rgb(223, 231, 235)">
    <center>
        <h2>Insert Book Details</h2>

        @if (session('success'))

        <h5 style="padding: 15px;background: green;color: white;width: 25%">{{ session('success') }}</h4>
        @endif
    {{-- <form action="{{ route('books.update') }}" method="POST"> --}}
    <form action="{{ url('books/'.$book->id)}}" method="POST">
         @csrf
        {{-- {{ csrf_field() }} --}}
        @method('PUT')
            <input type="text" name="book_name" value="{{ $book->book_name }}" placeholder="Book Name" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
            <br>
            <br>
            <input type="text" name="book_author" value="{{ $book->book_author }}" placeholder="Book Author" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
            <br>
            <br>
            <input type="text" name="book_price" value="{{ $book->book_price }}" placeholder="Book Price" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
            <br>
            <br>
            <input type="text" name="book_type" value="{{ $book->book_type }}" placeholder="Book Type" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
            <br>
            <br>

            <button type="submit" style="width: 20%;background: rgb(156, 84, 84);padding: 10px;font-weight: 700;font-size: 15px">Submit</button>
        </form>
       <a href="{{ route('books.index') }}" style="text-decoration: none"> <h5 style="padding: 15px;background:darkgray;color: black;width: 25%">Back</h4></a>
    </center>
    </div>
