<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Input Output Event</title>

        <script type="text/javascript">
            function displayResult()
            {
                x = document.forms["formaku"]["inputbaru"].value;
                document.forms["formaku"]["result"].value = x;

            }
        
        </script>

    </head>

    <body>
        <form action="#" method="get" name="formaku">
            Enter anything : <input type="text" name="inputbaru"/><br/>
            <input type="button" value="result" onclick="displayResult();"/><br/><br>
            <output name="result"></output>

        </form>

    </body>

</html>