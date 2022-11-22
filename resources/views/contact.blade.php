@extends("main-layout")

@section("title", "Contact")

@section("main")
  <form method="post" action="/contact">
    @csrf
    <textarea rows="10" cols="100" name="message"></textarea>
    <button type="submit">Send</button>
  </form>
@endsection