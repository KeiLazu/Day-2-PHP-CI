<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Storage</title>

</head>
<body>
    <!-- Session Storage -->
    <?php echo "Session Storage <br/><br/>" ?>
    <script type="text/javascript">
        if (sessionStorage.hits) {
            sessionStorage.hits = Number(sessionStorage.hits) + 1;

        } else {
            sessionStorage.hits = 1;

        }
        document.write ("Total Hits: " + sessionStorage.hits);

    </script>

    <br/><br/><br/><br/>

    <!-- Local Storage -->
    <?php echo "Local Storage <br/><br/>" ?>
    <script type="text/javascript">
        if (localStorage.hits) {
            localStorage.hits = Number(localStorage.hits) + 1;
        
        } else {
            localStorage.hits = 1;

        }
        document.write("Total Hits: " + localStorage.hits);
    
    </script>

    <br/><br/><br/><br/>

    <p>Refresh page to increase number of hits</p>
    <p>Close the window and open it again and check the result</p>
    <br/><br/>

    <?php echo "Click this button to reset Local Storage <br/>" ?>
    <script type="text/javascript">
        function clearLocalStorage() {
            localStorage.clear();
            window.location.reload(true);

        }
    
    </script>

    <form action="#"><input type="button" value="Reset" onclick="clearLocalStorage();" /></form>

</body>
</html>