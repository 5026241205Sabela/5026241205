<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fontjudul1 {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: x-large;
            font-weight: bold;
            text-align: center;
        }

        .fontjudul2 {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: medium;
            font-weight: lighter;
            text-align: center;
        }
        .fontheadercard{
            text-transform: uppercase;
            font-weight: bold;
        }

        .angkaharga {
            font-size: xxx-large;
            font-weight: lighter;
            font-style:italic;
            display: flex;
            justify-content: center;
            align-items: baseline;
            color: grey;
        }

        .satuanharga {
            font-size: small;
            color: gray;
            margin-right: 4px;
            align-self: flex-start;
            margin-top: 10px;
        }

        .permonth {
            font-size: small;
            color: gray;
            text-transform: uppercase;
            margin-left: 8px;
        }

        .fontawal {
            font-weight: bold;
        }

        .fontakhir {
            color: gray;
        }
        .fontakhir2 {
            color: white;
        }
        .buttonyourplan {
            width: 100%;
            color: rgba(128, 128, 128, 0.772);
            border: none;
            padding: 12px 0;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 4px;
            cursor: default;
        }
        .buttonupgrade {
            width: 100%;
            background-color:rgb(255, 204, 0) ;
            color: white;
            border: none;
            padding: 12px 0;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            border-radius: 4px;
            cursor: default;
        }
    </style>
</head>

<body>

    <div class="container-fluid bg-white py-5">
        <div class="row">
            <div class="col pb-5">
                <div>
                    <p class="fontjudul1">Choose a paid subscription that’s built for businesses.</p>
                    <p class="fontjudul2">Or start with the basics for free, and upgrade at any time.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid bg-light py-5">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card text-center border-0 shadow-sm" style="width: 300px;">
                    <div class="card-header bg-warning text-white fontjudul2 fontheadercard border-0">Personal</div>
                    <div class="card-body">
                        <h2 class="angkaharga">
                            <span class="satuanharga">$</span>50<span class="permonth">/mo</span>
                        </h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">history</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">app integrations</span>
                        </li>
                        <li class="list-group-item fontakhir">Group meetings</li>
                        <li class="list-group-item fontakhir">Group external messages</li>
                        <li class="list-group-item fontakhir">Basic AI</li>
                    </ul>
                    <div class="p-4">
                        <button class="buttonyourplan fontakhir"> your plan </button>

                    </div>

                </div>

            </div>
            <div class="col-4">
                <div class="card text-center border-0 shadow-lg" style="width: 300px; margin-top: -40px; z-index: 10;">
                    <div class="card-header p-0 border-0">
                    <div class="py-2 text-white small font-weight-bold" style="background-color: #c2e0b1; letter-spacing: 1px;">POPULAR</div>
                    <div class="card-header bg-success text-white fontjudul2 fontheadercard py-3 border-0">profesional</div>
                    </div>
                    <div class="card-body">
                        <h2 class="angkaharga">
                            <span class="satuanharga">$</span>100<span class="permonth">/mo</span>
                        </h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">history</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">app integrations</span>
                        </li>
                        <li class="list-group-item fontakhir">Group meetings</li>
                        <li class="list-group-item fontakhir">Group external messages</li>
                        <li class="list-group-item fontakhir">Advanced AI</li>
                    </ul>
                    <div class="p-4">
                        <button class="buttonupgrade fontakhir2"> Upgrade </button>

                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card text-center border-0 shadow-sm" style="width: 300px;">
                    <div class="card-header bg-warning text-white fontjudul2 fontheadercard py-3 border-0">Business</div>
                    <div class="card-body">
                        <h2 class="angkaharga">
                            <span class="satuanharga">$</span>225<span class="permonth">/mo</span>
                        </h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">history</span>
                        </li>
                        <li class="list-group-item">
                            <span class="fontawal">Unlimited</span>
                            <span class="fontakhir">app integrations</span>
                        </li>
                        <li class="list-group-item fontakhir">Group meetings</li>
                        <li class="list-group-item fontakhir">Group external messages</li>
                        <li class="list-group-item fontakhir">Enterprise-grade AI</li>
                    </ul>
                    <div class="p-4">
                        <button class="buttonupgrade fontakhir2"> upgrade </button>

                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
