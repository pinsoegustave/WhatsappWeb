<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="search" name="livesearch" id="livesearch">
    </form>
    <div class="srch_rslt"></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#livesearch").keyup(function(){
                var input = $(this).val();

                if(input != ""){
                    $.ajax({
                        url:"live.php",
                        method:"POST",
                        data:{input:input},
                        
                        success:function(data){
                            $("#srch_rslt").html(data);
                        }
                    });

                }else{
                    $("#srch_rslt").css("display","none");
                }
            })
        })

    </script>
</body>
</html>