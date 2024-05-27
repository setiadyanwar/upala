<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{ $mailData['title'] }}</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="message">
            <p>Hai {{ $mailData['pelanggan']->nama }},</p>
            <br>

            {!! $mailData['content'] !!}
            <br>

            @if($mailData['media_attachment'] != null)
                <img src="{{ $message->embed(storage_path('app/public/notifikasi/'.$mailData['media_attachment'] )) }}" alt="Media Attachment" style="width: 130px; height: 100px;"><br>
            @endif

            <br>
            <p class="text-secondary text-md">See u at Upala, Cutiee ☕️</p>
            <br><br>
            <img src="{{ $message->embed(public_path('assets/img/upala-logo.jpg')) }}" alt="Media Attachment" style="width: 130px; height: 100px; left: 50%;"><br>
        </div>
        
    </div>
</body>

</html>