<h2>Data Insert</h2>


<form action="/insert" method="POST">
@csrf
    <input type="text" name="name" placeholder="Enter name" />
    <br>
    <span style="color: red">@error('name')
       {{ $message}}
    @enderror</span>
    <br>
    <input type="email" name="email" placeholder="Email" />
<br>
<br>
    <input type="password" name="password" placeholder="password" />
<br>
<br>
    <button type="submit">Submit </button>

</form>
