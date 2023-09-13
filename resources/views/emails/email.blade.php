<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
            <tr>
                <th>Sender</th>
                <td>{{ $form->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $form->email }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{ $form->message }}</td>
            </tr>
    </table>

</body>
</html>