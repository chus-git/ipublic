<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ipublic - your public IP address</title>

    <link rel="preload" href="{{ asset('assets/fonts/Belanosima.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/fonts/Mukta.woff2') }}" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <style>
        body {
            background-color: #111;
        }
        
    </style>

</head>

<body>

    <header>
        <span class="logo"><span>ip</span>ublic</span>
        <span class="subtitle">just know your public IPv4 address</span>
    </header>

    <main>

        <div class="public-ip-container">
            <span class="public-ip">{{ $publicIp }}</span>
            <button class="copy-button" onclick="copyToClipboard()"><i class="far fa-copy"></i></button>
        </div>

        <script>
            function copyToClipboard() {
                const publicIpElement = document.querySelector('.public-ip');
                const publicIp = publicIpElement.textContent;

                navigator.clipboard.writeText(publicIp)
                    .then(() => {
                        const copyButton = document.querySelector('.copy-button');
                        copyButton.innerHTML = '<i class="fas fa-check"></i>';
                        copyButton.style.color = '#3e70ff';
                    })
                    .catch((error) => {
                        alert('Error copying to clipboard:', error);
                        console.error('Error copying to clipboard:', error);
                    });
            }
        </script>

    </main>

    <footer>
        <span>we do not collect any data</span>
        <span>see the <a href="/">github repository</a> of this application</span>
    </footer>

</body>

</html>