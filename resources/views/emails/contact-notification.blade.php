{{-- resources/views/emails/contact-notification.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Kontak Baru</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 90%; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        h1 { color: #444; }
        strong { display: inline-block; width: 100px; }
        .message-content { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anda Menerima Pesan Baru!</h1>
        <p>Berikut adalah detail pesan yang dikirim melalui formulir kontak di situs web Anda.</p>
        <hr>
        <p><strong>Nama:</strong> {{ $contactMessage->name }}</p>
        <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
        <p><strong>Lokasi:</strong> {{ $contactMessage->location }}</p>
        <p><strong>Budget:</strong> {{ $contactMessage->budget }}</p>
        <p><strong>Subjek:</strong> {{ $contactMessage->subject }}</p>

        <div class="message-content">
            <p><strong>Isi Pesan:</strong></p>
            <p>{{ $contactMessage->message }}</p>
        </div>
    </div>
</body>
</html>
