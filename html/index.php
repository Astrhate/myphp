
<!--  CAMBIA EL NOMBRE DE ESTE ARCHIVO A INDEX, RECOMIENDO    -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>







<div class="col-md-6">
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usr" placeholder="User">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <br>    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button  class="btn btn-default" id="btnregister">REGISTRAR</button>
    </div>
  </div> 
</div>






</body>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>

    $('#btnregister').click(function () {
        var user = $('#usr').val();
        var mail = $('#email').val();
        if (user != '' && mail != '')
            $.get("register.php?user=" + user + "&mail=" + mail).done(function () {
                alert("REGISTRADO")
            }).fail(function () {
                alert("NO SIRVE");
            });
        else
            alert("no dejar espacios en blanco");
    })
    $(document).ready(function () {
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('whatever')
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    });

</script>


</html>