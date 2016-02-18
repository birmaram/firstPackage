<form action='{{ route("book.update",['id'=>$lists->id]) }}' method='POST'>
  <label>Name</label>
  <input type='text' placeholder="Author Name" name='name' value="{{ $lists->name}}"/>

  <label>Mobile Number</label>
  <input type='text' placeholder="Mobile Name" name='mobile' value="{{$lists->contact_number}}"/>

  <button type='Submit'>Save</button>
</form>
