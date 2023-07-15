<!DOCTYPE html>
<html>
<head>
  <title>JSON Display</title>
  <style>
    pre {
      background-color: #f5f5f5;
      padding: 10px;
    }
  </style>
</head>
<body>
  <pre id="json-data"></pre>

  <script>
    var jsonData = {
      "version": "1.2.0"
    };

    var jsonFormatted = JSON.stringify(jsonData, null, 2);
    document.getElementById("json-data").textContent = jsonFormatted;
  </script>
</body>
</html>