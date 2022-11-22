<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DVDs</title>
</head>
<body>
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
</body>
</html>