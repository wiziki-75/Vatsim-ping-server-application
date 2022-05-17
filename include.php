<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vatsim ping</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css">
  </head>

  <?php
    $status = json_decode(file_get_contents("https://status.vatsim.net/status.json"));
    $servers = json_decode(file_get_contents($status -> data -> servers [0]));
   ?>
