<form action="/proses-data" method="POST">
    @csrf
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>