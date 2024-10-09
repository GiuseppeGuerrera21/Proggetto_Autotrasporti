<!DOCTYPE html>
<html>
<head>
    <title>Richiesta di Trasporto</title>
</head>
<body>
    <h1>Nuova Richiesta di Trasporto</h1>
    <p><strong>Tipo di trasporto:</strong> {{ $data->tipo_trasporto }}</p>
    <p><strong>Città di partenza:</strong> {{ $data->citta_partenza }}</p>
    <p><strong>Regione di partenza:</strong> {{ $data->regione_partenza }}</p>
    <p><strong>Città di destinazione:</strong> {{ $data->citta_destinazione }}</p>
    <p><strong>Regione di destinazione:</strong> {{ $data->regione_destinazione }}</p>
    <p><strong>Data richiesta di consegna:</strong> {{ $data->data_consegna }}</p>
    <p><strong>Descrizione del carico:</strong> {{ $data->descrizione_carico }}</p>
    <p><strong>Assicurazione carico:</strong> {{ $data->assicurazione_carico ? 'Sì' : 'No' }}</p>
    <p><strong>Merci infiammabili:</strong> {{ $data->merci_infiammabili ? 'Sì' : 'No' }}</p>
    <p><strong>Email:</strong> {{ $data->email }}</p>
    <p><strong>Telefono:</strong> {{ $data->telefono }}</p>
</body>
</html>
