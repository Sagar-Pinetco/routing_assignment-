<div style="padding: 50px;background: rgb(223, 231, 235)">
<center>
    <h2>Insert Book Details</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
        <input type="text" name="book_name" placeholder="Book Name" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
        <br>
        <br>
        <input type="text" name="book_author" placeholder="Book Author" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
        <br>
        <br>
        <input type="text" name="book_price" placeholder="Book Price" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
        <br>
        <br>
        <input type="text" name="book_type" placeholder="Book Type" style="padding: 10px;background: transparent;border: 1px solid black;width: 25%">
        <br>
        <br>

        <button type="submit" style="width: 20%;background: rgb(156, 84, 84);padding: 10px;font-weight: 700;font-size: 15px">Submit</button>
    </form>
</center>
</div>
