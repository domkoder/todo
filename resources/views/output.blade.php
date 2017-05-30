<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>output</title>
  </head>
  <body>
      <table border="1" style="border-collapse:collapse">
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>batchnumber</th>
          <th>price</th>
          <th>experingDate</th>
          <th>manufacturingDate'</th>
          <th>Quantity</th>
          <th>manufacturersName</th>
        </tr>
        @foreach ($products as $pro)
            <tr><td>{{$pro->id}}</td><td>{{$pro->productName}}</td><td>{{$pro->barchNumber}}</td><td>{{$pro->price}}</td><td>{{$pro->experingDate}}</td><td>{{$pro->manufacturingDate}}</td><td>{{$pro->Quantity}}</td><td>{{$pro->manufacturersName}}</td></tr>
        @endforeach
      </table>
  </body>
</html>
