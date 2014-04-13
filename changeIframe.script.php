<!DOCTYPE html>
<html>
  <head>
    <title>Test</title>
    <meta charset="UTF-8">
    <style type="text/css">
      #myButton
      {
        position: absolute;
        border: none;
        outline: none;
        color: red;
        background-color: #424242;
        top: 450px;
        left: 100px;
        width: 100px;
        height: 42px;
      }
      #myButton:hover
      {
        background-color: #212121;
      }
      #myButton:active
      {
        margin-top: 2px;
      }

      iframe
      {
        display: none;
        height: 500px;
      }

      #iframe1
      {
        background-color: red;
      }

      #iframe2
      {
        background-color: blue;
      }

      #iframe3
      {
        background-color: green;
      }
    </style>
  </head>
  <body>
    <iframe id="iframe1"></iframe>
    <iframe id="iframe2"></iframe>
    <iframe id="iframe3"></iframe>
    <input id="myButton" type="submit" value="CHANGE IFRAME" onClick="changeIframe();">
    <script type="text/javascript">
      var bool = 0;

      function changeIframe()
      {
        if (!bool)
        {
          bool++;
          document.getElementById("iframe1").style.display = "block";
          document.getElementById("iframe2").style.display = "none";
          document.getElementById("iframe3").style.display = "none";
        }
        else if (bool == 1)
        {
          bool++;
          document.getElementById("iframe1").style.display = "none";
          document.getElementById("iframe2").style.display = "block";
          document.getElementById("iframe3").style.display = "none";
        }
        else
        {
          bool = 0;
          document.getElementById("iframe1").style.display = "none";
          document.getElementById("iframe2").style.display = "none";
          document.getElementById("iframe3").style.display = "block";
        }
      }
    </script>
  </body>
</html>
