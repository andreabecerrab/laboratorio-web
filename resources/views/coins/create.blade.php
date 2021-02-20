<h1>Create your coin here!</h1>
<form action="{{ route('coins.store') }}" method="POST">
  @csrf
  <label for="fname">Name:</label><br>
  <input type="text"  name="fname" ><br>
  <label for="sname">Short name:</label><br>
  <input type="text" name="sname" ><br><br>
  <input type="submit" value="Submit">
</form>

