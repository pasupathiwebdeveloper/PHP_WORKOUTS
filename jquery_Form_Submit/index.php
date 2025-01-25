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
         <form method="POST" id="myForm">
          <label>Name</label>
          <input type="text" name="name" />
          <label>Email</label>
          <input type="text" name="email" />
          <button type="submit">Submit</button>
        </form>
        <div id="response"></div>
        <script>
           $(document).ready(function(){
            $("#myForm").on("submit",function(e) {
              e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url:"process.php",
                type:"POST",
                data:formData,
                success:function(response){
                    $("#response").html("<p>"+ response + "</p>");
                },
                
                error:function(response){
                    $("#response").html("<p>"+ response + "</p>");
                },
            });
            });
           });
        </script>
        <script src="" async defer></script>
    </body>
</html>