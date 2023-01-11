<!DOCTYPE html>
<html lang="en_US">

<head>
    <title> Contact Managing </title>
    <style>
        div {
            width: 1500px;
            display: flex;
            overflow: auto;
            white-space: nowrap;
            margin: 0 auto;
            justify-content: space-between;
        }

        .button {
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

        table {
            width: 100%;
            word-break: break-all;
            border-spacing: 8px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }


    </style>
</head>

<body>

<div id="actions-of-contacts">

    <a href="/contacts/add" class="button">
        Add New Contact
    </a>

    <a href="/contacts/export" class="button">
        Export Data
    </a>
</div>
<div id="list-of-contacts">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date Of Birth</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Notes</th>
        </tr>

        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->surname }}</td>
                <td>{{ $contact->date_of_birth }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->city }}</td>
                <td>{{ $contact->notes }}</td>
            </tr>

        @endforeach
    </table>
</div>

</body>
</html>
