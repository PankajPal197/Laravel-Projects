<h1> Add New Number </h1>
@if(Session('name'))
<h3>Data Stored for{{ Session('name') }}</h3>
@endif
<form action="collect" method="POST">
@csrf
<input type="text" name="name" placeholder="Name" /><br /> <br />
<input type="text" name="city" placeholder="City" /><br /><br />
<input type="number" name="zip" placeholder="zip" /><br /><br />
<button type="submit">Submit</button>
</form>
