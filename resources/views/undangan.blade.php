<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('settings.wedding_name')}} - Invitation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding-bottom: 20px;
            margin: 0 auto;
        }

        .card .image-container {
            background-image: url('{{ asset('images/undanganheader.png') }}'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            padding: 80px;
        }

        .card img {
            width: 60%;
            max-width: 250px;
        }

        .card h3 {
            font-size: 20px;
            margin: 20px 0 10px;
            color: #333333;
        }

        .card p {
            font-size: 14px;
            color: #666666;
            margin: 0 20px 20px;
        }

        .info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 10px 20px;
            padding: 10px;
            border-top: 1px solid #eaeaea;
        }

        .info div {
            text-align: center;
            margin: 10px 0;
            flex: 0 0 50%; /* Full width by default */
        }

        .info div p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666666;
        }

        .info div span {
            font-weight: bold;
            color: #333333;
        }

        .button {
            background-color: #5a4dff;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }

        .button:hover {
            background-color: #483bd1;
        }

        #downloadBtn {
            margin-top: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card {
                width: 90%;
            }

            .card .image-container {
                padding: 60px;
            }

            .card h3 {
                font-size: 18px;
            }

            .card p {
                font-size: 14px;
                margin: 0 10px 15px;
            }

            .info div p {
                font-size: 14px;
            }

            .info div {
                flex: 0 0 50%; /* Each item takes up 50% width */
            }

            .button {
                padding: 8px 16px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                border-radius: 8px;
            }

            .card .image-container {
                padding: 40px;
            }

            .card img {
                width: 80%;
                max-width: 200px;
            }

            .card h3 {
                font-size: 16px;
            }

            .card p {
                font-size: 14px;
            }

            .info {
                flex-direction: row; /* Ensure items stay in row */
            }

            .info div {
                flex: 0 0 50%; /* Each item takes up 50% width */
            }

            .info div p {
                font-size: 14px;
            }

            .button {
                padding: 6px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="card" id="invitationCard">
        <div class="image-container">
        </div>
        <br>
        @if($nama_tamu)
        <p><strong>Kepada, {{$nama_tamu->tamu_nama}}</strong></p>
        @else
        @endif
        {!! $filledTemplate !!}
        @if($nama_tamu)
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->generate(url('undangan/'.$nama_tamu->tamu_uniquecode))) !!} " alt="QR Code">
        @else
        @endif

    </div>

    <button id="downloadBtn" class="button">Download Undangan</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            const card = document.getElementById('invitationCard');

            html2canvas(card, { scale: 2 }).then(function(canvas) {
                const link = document.createElement('a');
                link.href = canvas.toDataURL('image/jpeg');
                link.download = 'undangan-pernikahan-{{urlencode(config("settings.wedding_name"))}}.jpg';
                link.click();
            });
        });
    </script>

</body>
</html>
