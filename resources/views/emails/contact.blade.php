<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Message de contact</title>
</head>
<body>
    <h2>Nouvelle demande de contact</h2>
    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    @if (!empty($data['phone']))
        <p><strong>Téléphone :</strong> {{ $data['phone'] }}</p>
    @endif
    @if (!empty($data['company']))
        <p><strong>Entreprise :</strong> {{ $data['company'] }}</p>
    @endif
    <p><strong>Message :</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
