<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>products</title>
  </head>
  <body>
      <form method="post" action="/save/products" >
        {{csrf_field()}}
        <input type="text" placeholder="productsName" name="pname">
        <input type="text" placeholder="price" name="price">
        <input type="text" placeholder="barchNumber" name="bnum">
        <input type="text" placeholder="experingDate" name="edate">
        <input type="text" placeholder="manufacturingDate" name="mdate">
        <input type="text" placeholder="Quantity" name="quan">
        <input type="text" placeholder="manufacturersName" name="mname">
        <input type="submit">
      </form>
  </body>
</html>
