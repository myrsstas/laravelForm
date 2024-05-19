{{--Application development in popular integrated development environments. © 2023 by Myrsini Stasinou is licensed under CC BY-SA 4.0 --}}
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
            margin-top: 20px;
            width: 100%;
            table-layout: fixed;
            border-spacing: 8px;
            border-collapse: collapse;
        }

        th {
            background-color: #333;
            color: white;
        }

        .id {
            background-color: #800020;
            width: 3%;
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
            <th class="id">ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date Of Birth</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th class="notes">Notes</th>
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
