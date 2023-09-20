<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display-4">New Contact Form Submission</h1>
        <p class="lead">A new contact form submission has been received:</p>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> {{ $folio->username }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $folio->email }}</li>
            <li class="list-group-item"><strong>Phone:</strong> {{ $folio->phone }}</li>
            <li class="list-group-item"><strong>Message:</strong> {{ $folio->message }}</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
