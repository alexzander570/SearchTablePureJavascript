<!DOCTYPE html>
<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/custom-style.css" rel="stylesheet">
        
        <script src="scripts/custom-script.js"></script>
    </head>
    <body>
        <div class="mainHeader">
            <nav class="navbar navbar-default navbar-static-top navbar-utools">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Logo/Site Name</a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="menu1">Menu 1</a></li>
                            <li><a href="menu2">Menu 2</a></li>
                            <li><a href="menu3">Menu 3</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="micro">
                <div class="container">
                    <h2>Site information</h2>
                    <p>Short description.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-8">
                <h2>Table Name</h2>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="myTable">
                    <tr class="header">
                        <th style="width:60%;">Name</th>
                        <th style="width:40%;">Country</th>
                    </tr>
                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Berglunds snabbkop</td>
                        <td>Sweden</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>UK</td>
                    </tr>
                    <tr>
                        <td>Koniglich Essen</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Laughing Bacchus Winecellars</td>
                        <td>Canada</td>
                    </tr>
                    <tr>
                        <td>Magazzini Alimentari Riuniti</td>
                        <td>Italy</td>
                    </tr>
                    <tr>
                        <td>North/South</td>
                        <td>UK</td>
                    </tr>
                    <tr>
                        <td>Paris specialites</td>
                        <td>France</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                Extra Content
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>