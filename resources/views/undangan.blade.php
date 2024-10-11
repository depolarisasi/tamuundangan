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
            height: 250px;
        }

        .info-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px 20px 20px;
        }

        .left-info {
            width: 40%;
            text-align: center;
        }

        .right-info {
            width: 55%;
            text-align: left;
        }

        .qr-code {
            margin-bottom: 10px;
        }

        .qr-code img {
            width: 150px;
        }

        .details {
            margin: 20px 0;
        }

        .details h3 {
            font-size: 18px;
            color: #333;
        }

        .details p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        .details .label {
            font-weight: bold;
            color: #333;
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
            .info-container {
                flex-direction: column;
                align-items: center;
            }

            .left-info, .right-info {
                width: 100%;
                text-align: center;
            }

            .qr-code img {
                width: 150px;
            }

            .p2 {
                padding: 10px;
                margin: 10px;
                margin-bottom : 0px;
            }
        }
    </style>
</head>
<body>

    <div class="card" id="invitationCard">
        <div class="image-container">
        </div>


        <p class="label p2">  @if($nama_tamu)<strong>{{$nama_tamu->tamu_nama}}</strong>,
            @endif anda diundang pada acara spesial kami</p>
        <div class="info-container">

            <div class="right-info">
                <div class="details">
                    <h3>{{config('settings.wedding_name')}}</h3>
                    <p class="label">Resepsi Pernikahan</p>
                    <p><span class="label">Date:</span> {{config('settings.resepsi_day')}}, {{config('settings.wedding_date')}}</p>
                    <p><span class="label">Time:</span> {{config('settings.resepsi_time')}}</p>
                    <p><span class="label">Location:</span> {{config('settings.resepsi_place')}}</p>
                    <p>{{config('settings.resepsi_address')}}</p>
                </div>
            </div>
            <div class="left-info">
                <div class="qr-code">
                    @if($nama_tamu)
                    <p><small>Tunjukan QR Code ini Kepada Penerima Tamu</small></p>
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->generate(url('undangan/'.$nama_tamu->tamu_uniquecode))) !!}" alt="QR Code">

                </div>
                <p style="margin-bottom: 3px;"><strong>{{$nama_tamu->tamu_nama}}</strong></p>
                <p style="margin-top: 3px;"><strong>{{$nama_tamu->tamu_uniquecode}}</strong></p>
                @else
                @endif
            </div>
        </div>
        @if($nama_tamu)
        <p class="label">Informasi Lebih Lanjut : </p>
        <p><a href="{{url('/?guest='.$nama_tamu->tamu_uniquecode)}}">edwardnindita.unitedby.love/?guest={{$nama_tamu->tamu_uniquecode}}</a></p>
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
