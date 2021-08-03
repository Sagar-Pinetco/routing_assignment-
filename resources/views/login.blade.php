{{-- {{ $errors }} --}}


<form action="/" method="post">
    @csrf

    <input type="text" name="username" placeholder="Username" />
    <br>
    <span>@error('username')
        {{ $message }}
    @enderror</span>
    <br>
    <input type="password" name="passowrd" placeholder="Password" />
    <br>
    <span>@error('password')
        {{ $message }}
    @enderror</span>
    <br>
    <button type="submit">Submit</button>

</form>
