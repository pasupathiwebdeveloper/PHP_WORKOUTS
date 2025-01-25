<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
       <input type="text" name="name" id="name"/>
       <button type="submit" id="a">submit</button> 
      <div id="fetchData"></div>
      <div id="test"></div>
        <div id="response"></div>
        <script>
           $(document).ready(function(){
        $("#a").click(function() {
            var name = $("#name").val();
          $.ajax({
                url:"process.php",
                type:"GET",
                data:{name:name},
                success:function(response) {
                 $("#fetchData").html("<p>"+ response +"</p>");
                },
                error:function(error) {
                 $("#fetchData").html("<p>"+ response +"</p>");
                },
            });
               })

           });
        </script>
        <script src="" async defer></script>
    </body>
</html>