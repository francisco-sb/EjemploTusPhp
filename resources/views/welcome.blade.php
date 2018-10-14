<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://transloadit.edgly.net/releases/uppy/v0.27.5/dist/uppy.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
         <div id="drag-drop-area"></div>

        </div>


        <script src="https://transloadit.edgly.net/releases/uppy/v0.27.5/dist/uppy.min.js"></script>
        <script>
        var uppy = Uppy.Core()
            .use(Uppy.Dashboard, {
            inline: true,
            resume: true,
            autoRetry: true,
            retryDelays: [0, 1000, 3000, 5000],
            target: '#drag-drop-area',
            })
            .use(Uppy.Tus, {endpoint: 'tus/'}) 

        uppy.on('complete', (result) => {
            console.log(result);
            console.log(`Upload complete! We’ve uploaded these files: ${result.successful}`)
        })

        uppy.on('success', (fileCount) => {
                console.log(`${fileCount} files uploaded`)
            })

        uppy.on('upload-error', (file, error) => {
        console.log('error with file:', file.id)
        console.log('error message:', error)
        })

        // const uppy = Uppy.Core({debug: true, autoProceed: false})
        //         .use(Uppy.Dashboard, {target: '#drag-drop-area', inline: true})
        //         .use(Uppy.Tus, {endpoint: '/tus/'})
        //         .run()
        //     uppy.on('success', (fileCount) => {
        //         console.log(`${fileCount} files uploaded`)
        //     })
        </script>
    </body>
</html>
