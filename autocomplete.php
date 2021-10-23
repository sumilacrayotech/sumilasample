

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"
        type = "text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
        type = "text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
      rel = "Stylesheet" type="text/css" />
<script>
    $(function () {
    $('#txt').autocomplete({
        source: [{'label': 'milan', 'value': '1'}, {'label': 'minos', 'value': '2'}],
        focus: function( event, ui ) {
            event.preventDefault();
            $('#txt').val(ui.item.label);
        },
        select: function( event, ui ) {
            event.preventDefault();
            $('#txt').val(ui.item.label);
            $('#txt1').val(ui.item.value);
        }
    });
    });

</script>
<form action="go.php" method="post">
    <input id="txt" type="text" />
    <input id="txt1" type="text" />
</form>
/*https://stackoverflow.com/questions/46236237/how-to-get-key-value-from-jquery-auto-complete*/