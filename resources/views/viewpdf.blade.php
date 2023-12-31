<!DOCTYPE html>
<html>
    <head>
        <title>PDF.js iframe readonly</title>
        <style>
            iframe {
                position: fixed; 
                top: 0; 
                left: 0; 
                bottom: 0; 
                right: 0; 
                width: 100%; 
                height: 100%; 
                border: none; 
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                z-index: 999;
            }
        </style>
    </head>
    <body>
        <!-- You can use relative path to your PDF file -->
        <iframe src="{{ asset('pdfjs/generic/web/viewer.html') }}?file={{ url('../uploads/tes.pdf') }}" />
        <!-- or you can use full URL to your PDF file -->
        <!-- <iframe src="https://latuminggi.github.io/pdf.js_readonly/generic/web/viewer_readonly.html?file=https://latuminggi.github.io/pdf.js_readonly/test/Lorem_ipsum" /> -->
    </body>
</html>