<h2>Data Insert</h2>


<form action="/updated" method="POST">
@csrf
    <input type="text" name="name" placeholder="Enter name" value="{{ $update->name }}" />
    <br>
    <span style="color: red">@error('name')
       {{ $message}}
    @enderror</span>
    <br>
    <input type="email" name="email" placeholder="Email" value="{{ $update->email}}" />
<br>
<br>
    <input type="password" name="password" placeholder="password" value="{{ $update->password }}" />
    <input type="hidden" name="id" value="{{ $update->id }}">
<br>
<br>
    <button type="submit">update </button>

</form>
