<!DOCTYPE html>
<html lang="en_US">

<head>
    <title> Contact Managing </title>
    <style>
        .createNewList{
            border: solid 1px black;
            padding: 30px;
            text-align: center;
         }
        .previousListUpload{
            border: solid 1px black;
            padding: 30px;
            text-align: center;
        }

        .button{
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #7aa8b7;
            border-radius: 6px;
            outline: none;
        }
    </style>
</head>

<body>

<div>
    <div class ="createNewList">

        <form method="post" action="/startFromZero">
            @csrf
            <h4>To start a new list, click on "Start from Zero"</h4>
            <button class='button' type="submit">Start from Zero</button>
        </form>
    </div>
    <hr />
    <div class ="previousListUpload">
        <form method="post" action="/upload" enctype="multipart/form-data">
            @csrf
             <h4>If you used this site before, and have a file, please upload it.</h4>
             <input type="file" id="previousContactsFile" name="previousContactsFile" accept=".txt"/>
             <button class='button' type="submit">Upload File</button>
         </form>
    </div>


</div>
</body>
</html>
