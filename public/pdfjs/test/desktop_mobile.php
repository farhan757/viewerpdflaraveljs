<!DOCTYPE html>
<html>
    <head>
        <title>PDF.js desktop & mobile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                var viewerDesktop = '../generic/web/viewer_readonly.html?file=../../tes.pdf';
                var viewerMobile  = '../mobile-viewer/viewer_readonly.html?file=../test/Lorem_ipsum';
                var screenWidth   = $(window).width();
                var screenHeight  = $(window).height();
                var topSize       = 50; // pixels
                var iframeHeight  = screenHeight - topSize; // window height reduced by top size (navbar)
                console.log( 'screenWidth: '  + screenWidth   +'px' );
                console.log( 'screenHeight: ' + screenHeight  +'px' );

                $('iframe').attr('height', iframeHeight +'px');
                $('iframe.desktop').attr('width', (screenWidth * 0.75) +'px');
                $('iframe.desktop').attr('src', viewerDesktop);
                $('iframe.mobile').attr('width', (screenWidth * 0.25) +'px');
                $('iframe.mobile').attr('left', (screenWidth * 0.75) +'px');
                $('iframe.mobile').attr('src', viewerMobile);

                if ( screenWidth <= 767) {
                    $('iframe').remove();
                    $('#content').append('<iframe class="mobile" height="'+ iframeHeight +'px" />');
                    $('iframe').attr('style', 'border:none;width:'+ screenWidth +'px');
                    $('iframe').attr('left', '0px').attr('src', viewerMobile);
                    alert(
                      'You currently viewing this page on mobile screen size.\n'+
                      'For better experience, view this page on desktop screen!'
                    );
                }
            });
        </script>
        <style>
            iframe.desktop {
                position: fixed; 
                top: 50px; 
                left: 0; 
                bottom: 0; 
                right: 0; 
                /* width: 100%; */
                /* height: 93%; */
                border: none; 
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                z-index: 999;
            }
            
            iframe.mobile {
                position: fixed; 
                top: 50px; 
                /* left: 0; */
                bottom: 0; 
                right: 0; 
                /* width: 100%; */
                /* max-width: 420px; */
                /* height: 93%; */
                border: none;
                border-left: 1px solid black;
                margin: 0; 
                padding: 0; 
                overflow: hidden; 
                z-index: 999;
            }
        </style>
    </head>
    <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">PDF.js Read Only</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a>Desktop & Mobile</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div id="content">
        <iframe class="desktop"></iframe>
        <iframe class="mobile"></iframe>
      </div>
    </body>
</html>