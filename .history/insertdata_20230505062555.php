<!DOCTYPE html>
<html lang="en">
    <head>
        <title> ajax example</title>
        <style>
            #main{
                text-align: center;
                color: red;
                background-color: green;
            }
        </style>
    </head>
    <body>
        <table id="main" border="0" cellspacing="0">
            <tr >
                <td id="header">
                    <h1>add record with ajax crud</h1>
                </td>
            </tr>

            <tr>
                <td id="table-form">
                    <form id="addform">
                        First Name: <input type="text" id="name">
                        Email Address: <input type="text" id="email">
                        <input type="button" id="save-button" value="Insert" >
                    </form>
                </td>
            </tr>
            <tr>
                <td id="table-data">

                </td>
            </tr>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

     

        <script type="text/javascript">
            $(document).ready(function(){
                function loadTable(){
       $.ajax({
                        url: "ajaxlaod.php",
                        type:"post",
                        success: function(data){
                            $("#table-data").html(data);
                        }

                    });
                }
                loadTable();
                $("#save-button").on("click",function(e){
                    e.preventDefault();
                    var name=$("#name").val();
                    var email=$("#email").val();
                    $.ajax({
                        url: "ajaxinsert.php",
                        type:"post",
                        data:{name:name,email:email},
                        success: function(data){
                            if(data==1){
                            loadTable();
                            $("#addform").trigger("reset");
                            }else{
                                alert("error in saving data");
                            }
                        }

                    });
                })

            });
        </script>
    </body>

</html>
