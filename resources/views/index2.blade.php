<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
        <div id="uploader">
            <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
        </div>

        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js" charset="UTF-8"></script>

        <!-- <script src="https://transloadit.edgly.net/releases/uppy/v0.27.5/dist/uppy.min.js"></script> -->
        <script src="/js/plupload-3.1.2/js/plupload.full.min.js"></script>
        <script src="/js/plupload-3.1.2/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>


<link type="text/css" rel="stylesheet" href="https://www.plupload.com/plupload//js/jquery.plupload.queue/css/jquery.plupload.queue.css" media="screen" />


        <script type="text/javascript">
        // Initialize the widget when the DOM is ready
        $(function() {
            // Setup html5 version
            $("#uploader").pluploadQueue({
                // General settings
                runtimes : 'html5,flash,silverlight,html4',
                url : "http://127.0.0.1:8000/upload",
                
                chunk_size : '10mb',
                rename : true,
                dragdrop: true,
                
                filters : {
                    // Maximum file size
                    max_file_size : '300mb',
                    // Specify what files to browse for
                    mime_types: [
                        {title : "Image files", extensions : "jpg,gif,png"},
                        {title : "Zip files", extensions : "zip"},
                        {title : "mp4 files", extensions : "mp4"}
                    ]
                },
        
                // Resize images on clientside if we can
                resize: {
                    width : 200,
                    height : 200,
                    quality : 90,
                    crop: true // crop to exact dimensions
                },
        
        
                // Flash settings
                flash_swf_url : '/js/plupload-3.1.2/js/Moxie.swf',
            
                // Silverlight settings
                silverlight_xap_url : '/js/plupload-3.1.2/js/Moxie.xap'
            });
        });
        </script>
        
    </body>
</html>
