<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">

  <title>Document</title>
 </head>
 <body>
 <form ng-submit="ceatAdmin()">
 <div class="bar bar-header bar-positive">
  <h1 class="title">***เพิ่มผู้ดูแลระบบ***</h1>
</div>
<div class="list has-subheader">
  <label class="item item-input">
    <span class="input-label">Username</span>
    <input type="text" ng-model="AdminData.username">
  </label>
  <label class="item item-input">
    <span class="input-label">Password</span>
    <input type="password" ng-mo vbdel="AdminData.password">
  </label>
  <button type ="submit" class="button button-block button-positive">
  เพิ่มข้อมูล
</button>
</div>
</form>

 </body>
</html>
