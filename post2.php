<!doctype html>
<html lang="en">

<head>
    <title>ThaiCreate.Com Tutorials</title>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>
    <form action="javascript:alert( 'success!' );" name="frm" id="frm" method="POST">
    <input type="text" name="txt" id="txt">
    <input type="text" name="txt2" id="txt2">

    <input type="submit" name="btnSend" id="btnSend" value="Send">
    </form>

    <div></div>
    <script >

            $("#frm").submit(function () {
                alert("erere");
                $.ajax({
                type: "POST",
                dataType: "json",
                data: $("#frm").serialize(),
                url: 'save2.php',
                success: function(data) {
                    alert(data);
                }
                });
            });

    </script>
</body>

</html>