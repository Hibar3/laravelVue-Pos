<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" href="../sass/app.scss" > -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<script>
 window.Laravel = {csrfToken: '{{   csrf_token() }}'}
</script>
  <title>POS</title>
</head>
<body>  
<div id="app">
    <p>asda</p>
    <example></example>
    <!-- <welcome></welcome> -->
    <Forms></Forms>
    <VueForms></VueForms>
  </div>
<script src="{{ asset('js/app.js') }}"></script>
  
</body>
</html>
