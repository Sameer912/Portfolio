<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
</head>
<body>
    <h1>Form Submitted</h1>
    <p>Here are the submitted form details:</p>
    <ul>
        <li>Name: {{ $formData['name'] }}</li>
        <li>Email: {{ $formData['email'] }}</li>
        <li>Phone: {{ $formData['subject'] }}</li>
        <li>Message: {{ $formData['message'] }}</li>
        <!-- Add more form fields as necessary -->
    </ul>
</body>
</html>
