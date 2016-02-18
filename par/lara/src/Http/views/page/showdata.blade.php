<html>
<body>

    <a href='{{ route("book.add_submit") }}'>Add Author</a>
<table border=2>
      <tr>
          <th> SI.NO. </th>
          <th> NAME </th>
          <th> mobile  NUMber </th>
          <th> Action </th>
          <th> Action </th>
          <th> Action </th>
      </tr>

      @foreach($lists as $k=>$author)
      <tr>
          <td> {{  $k+1 }} </td>
          <td>{{ $author -> name }} </td>
          <td> {{ $author->contact_number }} </td>
          <td> <a  href= '{{ route("book.del",['id'=>$author->id]) }}' >delete </td>
          <td> <a  href= '{{ route("book.edit",['id'=>$author->id]) }}'> Edit</td>
          <td> <a  href = '{{ route("book.sorting")}} '>Sorting </td>
      </tr>
      @endforeach
  <table>
</body>
</html>
