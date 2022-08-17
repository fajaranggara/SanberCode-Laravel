@extends('layout.master')

@section('title')
    Halaman Biodata
@endsection

@section('content')
<form action="/welcome" method="post">
@csrf

  <label>First name:</label><br />
  <input type="text" name="first-name" /><br /><br />
  <label>Last name:</label><br />
  <input type="text" name="last-name" /><br /><br />
  <label>Gender</label><br />
  <input type="radio" name="gender" value="male" />Male<br />
  <input type="radio" name="gender" value="female" />Female<br />
  <input type="radio" name="gender" value="other" />Other<br /><br />
  <label>Nationality</label><br />
  <select name="nationality">
    <option value="indonesian">Indonesian</option>
    <option value="japanesse">Japanesse</option>
    <option value="korean">Korean</option>
    <option value="russian">Russian</option></select
  ><br /><br />
  <label>Language Spoken:</label><br />
  <input type="checkbox" name="language[]" value="bahasa indonesia"/>Bahasa Indonesia <br />
  <input type="checkbox" name="language[]" value="english"/>English <br />
  <input type="checkbox" name="language[]" value="other"/>Other <br /><br />
  <label>Bio</label><br />
  <textarea name="bio" cols="30" rows="10"></textarea><br /><br />

  <input type="submit" value="Sign Up" />
</form>
@endsection
