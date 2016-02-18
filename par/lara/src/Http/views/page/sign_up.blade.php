
<div class="panel panel-default container">
  <div class="panel-heading"  style="padding: 20px 100px 12px;">WE JUST NEED SOME BASIC IMFORMATION</div>
  <div class="panel-body" >
<form action='{{ route("book.add_submit") }}' method='POST'>
    <label>Name</label>
  <input type='text' placeholder="Book_name" name='name' />


  <label>contact_NUMber</label>
  <input type='text' placeholder="NUMBER" name='contact_NUMber' />

  <button type='Submit'>Save</button>
</form>
  </div>
</div>
</div>
