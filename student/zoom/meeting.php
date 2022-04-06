<!DOCTYPE html>
<?php
include '../../class/include.php';
include '../auth.php'; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style> 
            .meeting-info-icon__icon{
                display: none !important;
            }
            .ax-outline-blue-important{
                display: none !important;
            }
            .more-button__button{
                display: none !important;
            }


        </style>

    </head>
    <body>
        <div id="zmmtg-root"></div>

        <!-- Zoom Code Segments -->
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/react/umd/react.production.min.js"></script>
        <script src="node_modules/react-dom/umd/react-dom.production.min.js"></script>
        <script src="node_modules/redux/dist/redux.min.js"></script>
        <script src="node_modules/redux-thunk/dist/redux-thunk.min.js"></script>
        <script src="node_modules/lodash/lodash.min.js"></script>
        <script src="https://source.zoom.us/zoom-meeting-1.8.0.min.js"></script>
        <script src="js/tool.js"></script>
        <script src="js/vconsole.min.js"></script>
        <script src="js/meeting.js"></script>


        <script>
                    const simd = async () = > WebAssembly.validate(new Uint8Array([0, 97, 115, 109, 1, 0, 0, 0, 1, 4, 1, 96, 0, 0, 3, 2, 1, 0, 10, 9, 1, 7, 0, 65, 0, 253, 15, 26, 11]))
                    simd().then((res) = > {
            console.log("simd check", res);
            });
        </script>

    </body>


</html>
