<!DOCTYPE html>
<html lang="en_US">

<head>
    <title> Contact Managing </title>
    <style>
        div{
            width: 800px;
            display: flex;
            overflow: auto;
            white-space: nowrap;
            margin: 0 auto;
            justify-content: space-between;
        }
        .button{
            display: inline-block;
            padding: 10px 20px;
            text-align: left;
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

<div id="actions-of-contacts">

    <a href="/contacts/add" class="button">
        Add New Contact
    </a>
       <button class="button"> Export Data </button>
</div>
<div id="list-of-contacts">
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>DOB</th>
        <th>email</th>
    </tr>
@foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->surname }}</td>
        <td>{{ $contact->date_of_birth }}</td>
        <td>{{ $contact->email }}</td>

    </tr>

    @endforeach
    </table>
</div>

</body>
</html>
