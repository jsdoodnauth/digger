<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Digger - Source List Manager</title>
    </head>
    <body class="bg-blue-900 text-blue-100 pt-20">
      <h1>Source List</h1>
      <form action="/sourcelist" method="POST">
        @csrf
        <label for="url">URL</label><input id="url" type="text" name="url" placeholder="https://"><br />
        <label for="source">Source</label><input id="source" type="text" name="source" placeholder="Name - Description"><br />
        <label for="category">Category</label><input id="category" type="text" name="category" placeholder="Category/Topic"><br />
        <label for="parseTitle">parseTitle</label><input id="parseTitle" type="text" name="parseTitle" placeholder="CSS selector"><br />
        <label for="parseBody">parseBody</label><input id="parseBody" type="text" name="parseBody" placeholder="CSS selector"><br />
        <label for="parseLink">parseLink</label><input id="parseLink" type="text" name="parseLink" placeholder="CSS selector"><br />
        <button type="submit">Submit</button>
      </form>

      <div>
        @foreach ($sourcelist as $item)
        <form action="/sourcelist/{{ $item->id }}" method="POST">
            @csrf
            @method('PUT')
          <input type="hidden" name="id" value="{{ $item->id }}">
          <input type="text" name="url" value="{{ $item->url }}"><br />
          <input type="text" name="source" value="{{ $item->source }}"><br />
          <input type="text" name="category" value="{{ $item->category }}"><br />
          <input type="text" name="parseTitle" value="{{ $item->parseTitle }}"><br />
          <input type="text" name="parseBody" value="{{ $item->parseBody }}"><br />
          <input type="text" name="parseLink" value="{{ $item->parseLink }}"><br />
          <button type="submit">Edit</button>
        </form>
        @endforeach
      </div>
    </body>
</html>
