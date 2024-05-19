{{--Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0 --}}
<!DOCTYPE html>
<html lang="en_US">

<head>
    <title> Contact Managing </title>
    <style>

        .container{
            border-radius: 5px;
            padding: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button{
            font-size:18px;
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #7aa8b7;
            border-radius: 6px;
            outline: none;
            border: solid 2px black;
        }

        .backButtonDiv{
            text-align: right;
        }

        .backButton{
            font-size:20px;
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: #7aa8b7;
            border-radius: 6px;
            outline: none;
            border: solid 2px black;
        }
    </style>
</head>

<body>
    <div class ="container">
        <form method="post" action="/contacts/add">
             @csrf
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" placeholder="Name" required/>

            <label for="surname">Surname: </label>
            <input type="text" id="surname" name="surname" placeholder="Surname" />

            <label for="dateOfBirth">Date Of Birth: </label>
            <input type="date" id="dateOfBirth" name="dateOfBirth" />

            <label for="phoneNumber">Phone Number: </label>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" maxlength="10" required/>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" placeholder="Email" required/>

            <label for="address">Address: </label>
            <input type="text" id="address" name="address" placeholder="Address" />

            <label for="city">City: </label>
            <input type="text" id="city" name="city" placeholder="City" />

            <label for="notes">Notes: </label>
            <textarea id="notes" name="notes" placeholder="Notes" rows="4" cols="80"> </textarea>

            <button type="submit" >Submit And Enter Next Entry </button>

            <hr/>

            <div class="backButtonDiv">
                <a href="/contacts" class="backButton">Back to List</a>
            </div>
         </form>
    </div>

    <script>
        const eventHandler = (event) => {
            const charCode = (event.which) ? event.which : event.keyCode
            if (charCode < 48 || charCode > 57)
                event.preventDefault();
        }

        document
            .getElementById('phoneNumber')
            .addEventListener('keypress', eventHandler);
    </script>
</body>
</html>
