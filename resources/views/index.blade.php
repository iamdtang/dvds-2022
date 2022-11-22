@extends("main-layout")

@section("title", "Home")

@section("main")
  <p>There are {{count($dvds)}} DVDs.</p>

  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Rating</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($dvds as $dvd)
          <tr>
            <td>{{$dvd->title}}</td>
            <td>{{$dvd->genre}}</td>
            <td>{{$dvd->rating}}</td>
          </tr>
        @endforeach
      </tr>
    </tbody>
  </table>
@endsection