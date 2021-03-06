<?php?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/patternStyle/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/myCodes/mainScreen.js"></script>
</head>
<body>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="input-group mb-3">
      <input id="searchinput" type="text" autocomplete="off" class="form-control" placeholder="Products, Services & People" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-success my-2 my-sm-0" type="button">
      <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" >
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
        </svg>
        </button>
      </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>
