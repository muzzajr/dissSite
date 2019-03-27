<html>
<head>
    <script src="java.js"></script>
</head>
<body>
    <img id="can" src="" width="600" height="600" style="position:absolute;top:13%;left:10%;border:2px solid;background:white;touch-action:none;">
    <button type="button" value="load Image" onclick="loadImage()">Load Image</button>
</body>
<script>
    function loadImage() {
        var dataURL = localStorage.getItem("heroPicture");
        var img = document.getElementById("can");
        img.src = dataURL;
    }
</script>
</html>