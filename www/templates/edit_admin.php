<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">

  <title>Document</title>
 </head>
 <body>
 <form ng-submit="EditAdmin()">
 <div class="bar bar-header bar-positive">
  <h1 class="title">***แก้ไขผู้ดูแลระบบ***</h1>
</div>
<div class="list has-subheader">
    <label class="item item-input">
    <span class="input-label">ID : </span>
    <input type="password" ng-mo vbdel="EditAdminData.id">
  </label>
  <label class="item item-input">
    <span class="input-label">Username</span>
    <input type="text" ng-model="EditAdminData.username">
  </label>
  <label class="item item-input">
    <span class="input-label">Password</span>
    <input type="password" ng-mo vbdel="EditAdminData.password">
  </label>
  <button type ="submit" class="button button-block button-positive">
  แก้ไข้
</button>
</div>
</form>

 </body>
</html>
