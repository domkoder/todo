<html>
  <head>
    <meta charset="utf-8">
    <title>form</title>
  </head>
  <body>
    <form method="post" action="/save/student" >
      {{csrf_field()}}
      <input type="text" placeholder="firstName" name="fname">
      <input type="text" placeholder="lastName" name="lname">
      <input type="text" placeholder="address" name="add">
      <input type="text" placeholder="depatment" name="dep">
      <input type="text" placeholder="gender" name="gen">
      <input type="submit">
    </form>
  </body>
</html>
