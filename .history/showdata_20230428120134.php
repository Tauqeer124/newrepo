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
                    <h1>php with ajax crud</h1>
                </td>
            </tr>
            <tr>
                <td id="table-load">
                    <input type="button" id="load-button" value="Load Data" >
                </td>
            </tr>
            <tr>
                <td id="table-data">
                    <table border="1" cellspacing="0" cellpading="10px" width="100%" >
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Name2</th>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">HELLO</td>
                            <td align="center">HY</td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            
        </script>
    </body>

</html>