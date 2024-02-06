<h1>File Upload</h1>

<form action="upload" method="Post">
    @csrf
    <input type="file" name="file"><br /><br />
    <button type="submit">Upload file</button>
    {{-- <button type="submit">Login </button> --}}
</form>
