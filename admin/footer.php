</div>

</body>
<script src="css/js/app.min.js"></script>
<script src="css/js/vendor.min.js"></script>
<script src="css/libs/morris-js/morris.min.js"></script>
<script src="css/libs/raphael/raphael.min.js"></script>

<script src="css/js/pages/dashboard.init.js"></script>
<script>
    switchDarkMode = () => {
        if (document.getElementById("dark-mode-switch").checked) {
            document.getElementById("bootstrap-stylesheet").href = "css/css/bootstrap-dark.min.css";
            document.getElementById("app-stylesheet").href = "css/css/app-dark.min.css";
        } else {
            document.getElementById("bootstrap-stylesheet").href = "css/css/bootstrap.min.css";
            document.getElementById("app-stylesheet").href = "css/css/app.min.css";
        }
    }
</script>

</html>