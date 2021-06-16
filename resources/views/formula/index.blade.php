<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="theme-color" content="#000">
    <title>Pipeline of the Future (PotF)</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::to('icons/tubes.png') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('fonts/google/googleapis.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::to('fonts//font-awesome-pro/css/all.min.css') }}">
    <link rel="manifest" href="{{ URL::to('_manifest.json') }}"
        data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ URL::to('app/icons/icon-192x192.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('styles/hover/hover.css') }}">

    <style>
        .function-name{
            color:blue;
            font-weight:bold
        }
    </style>
</head>

<body>



    <div class="m-2">
            <div class="card card-style bg-theme pb-0 position-sticky shadow p-3 mb-5 bg-white" style="top: 10px;z-index: 9;">
                <div class="content">
                    <p>Most Microsoft Excel formula functions are available. Click on the <strong>Example call</strong> on the function to load the example into the sandbox <strong>or</strong> write your own formula.</p>
                    <form id="formula-box">
                        <div class="row flex-justify-around mb-0">
                            <div class="col-12 col-sm-4 mb-3">
                                <label class="sr-only" for="in">Formula</label>
                                <input type="text" class="form-control" id="in" placeholder="Type your formula">
                            </div>
                            <div class="col-12 col-sm-4 mb-3 text-center">
                                <button type="submit" class="btn btn-l mb-3 rounded-s text-uppercase font-900 shadow-s bg-highlight">Submit</button>
                            </div>
                            <div class="col-12 col-sm-4 mb-3">
                                <label class="sr-only" for="out">Username</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="out" placeholder="Result">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
            
            
            <div class="card card-style bg-theme pb-0">
                <div class="content m-5" id="tab-group-1">
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                        <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1"><strong>DATE</strong> </a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2"><strong>FINANCIAL</strong></a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3"><strong>ENGINEERING</strong></a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-4"><strong>LOGICAL</strong></a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-5"><strong>MATH</strong></a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-6"><strong>STATISTICAL</strong></a>
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-7"><strong>TEXT</strong></a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1">
                        @include('formula.date')
                        
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2">
                        @include('formula.financial')
                       
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3">
                        @include('formula.engineering')
                        
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4">
                        @include('formula.logical')
                        
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-5">
                        @include('formula.math')
                       
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-6">
                        @include('formula.statistical')
                      
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-7">
                        @include('formula.text')
                    </div>

                </div>
            </div>
           
           
            





        </div>
    


    <script type="text/javascript"
        src="{{ URL::to('scripts/plugins/jquery/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ URL::to('scripts/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jstat@1.9.2/dist/jstat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/formulajs/formulajs@2.5.0/dist/formula.min.js"></script>



    <script>
        $('#formula-box').on('submit', function (event) {
            event.preventDefault();
            $('#out').val(eval($('#in').val()));
        });
    </script>

    <script>
        $('.function').each((index, component) => {
            var call = $(component).find('.function-call');
            call.on('click', function () {
                $('#in').val($(this).attr('data-function-call'));
                $('#formula-box').submit();
            });
        });

        formulaKeys = Object.keys(formulajs);
        formulaKeys.forEach((key) => {
            window[key] = formulajs[key];
        })
    </script>

    <script>
        // Image lazy load
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
            }
        }
    </script>

    <script>
         var _0xce56xe2 = document['querySelectorAll']('.tab-controls a');
        if (_0xce56xe2['length']) {
            _0xce56xe2['forEach'](function(_0xce56xb) {
                if (_0xce56xb['hasAttribute']('data-active')) {
                    var _0xce56xe3 = _0xce56xb['parentNode']['getAttribute']('data-highlight');
                    _0xce56xb['classList']['add'](_0xce56xe3);
                    _0xce56xb['classList']['add']('no-click')
                }
            });
            _0xce56xe2['forEach']((_0xce56xc) => {
                return _0xce56xc['addEventListener']('click', (_0xce56xb) => {
                    var _0xce56xe3 = _0xce56xc['parentNode']['getAttribute']('data-highlight');
                    var _0xce56xe4 = _0xce56xc['parentNode']['querySelectorAll']('a');
                    _0xce56xe4['forEach'](function(_0xce56xb) {
                        _0xce56xb['classList']['remove'](_0xce56xe3);
                        _0xce56xb['classList']['remove']('no-click')
                    });
                    _0xce56xc['classList']['add'](_0xce56xe3);
                    _0xce56xc['classList']['add']('no-click')
                })
            })
        };
    </script>
</body>

</html>