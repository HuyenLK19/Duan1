<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                2017 - 2020 &copy; Simple theme by <a href="#">Coderthemes</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->
</div>
<!-- end content -->

</div>
</div>
<script src="css/js/app.min.js"></script>
<script src="css/js/vendor.min.js"></script>
<script src="css/libs/morris-js/morris.min.js"></script>
<script src="css/libs/raphael/raphael.min.js"></script>
<script src="css/js/pages/dashboard.init.js"></script>
</body>

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

    hideSideBar = () => {
        if (document.getElementById("body").getAttribute("class") == "sidebar-enable") {
            document.getElementById("body").setAttribute("class", "enlarged");
        } else document.getElementById("body").setAttribute("class", "sidebar-enable");
    }
</script>

</html>