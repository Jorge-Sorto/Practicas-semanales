New Pet
<form action="{{ url('/pet') }}" method="post">
    @csrf
    Name:
    <input type="text" name="name" id="name">
    Age:
    <input type="number" name="age" id="age">
    <button type="submit">Save</button>
</form>
