<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<style>
    .flex{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    #top {
        border: 3px solid green;
        width: 80%;
        align-items: center;
        text-align: center;
        margin-top: 7%;
        margin-left: 10%;
        background-color: #6D214F;
    }
    
    #top h1 center{
        color: #C4E538;
    }

    .form-group label {
        color: white;
    }


</style>
    </head>
    <body>
        <div id="top">
            <h1> <center> AREA OF SHAPE  </center> </h1>
            <div class="container flex">
                <div style="width:404">
                    <h2 style="color:#1B9CFC"> <center>Area of Triangle</center> </h2>

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="a">Enter value of A</label>
                            <input type="text" class="form-control" id="a" name="a">
                        </div>
                        <div class="form-group">
                            <label for="b">Enter value of B</label>
                            <input type="text" class="form-control" id="b" name="h">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <h2 style="color:#7efff5">The result: {{ $areaTriangle}} </h2>
                </div>
                <div style="width:404">
                    <h2 style="color:#1B9CFC"><center>Area of Quadrangle</center></h2>
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="c">Enter value of an adge</label>
                            <input type="text" class="form-control" id="c" name="e1">
                        </div>

                        <div class="form-group">
                            <label for="d">Enter value of an adge</label>
                            <input type="text" class="form-control" id="d" name="e2">
                        </div>

                        <div class="form-group">
                            <label for="e">Enter value of an adge</label>
                            <input type="text" class="form-control" id="e" name="e3">
                        </div>

                        <div class="form-group">
                            <label for="f">Enter value of an adge</label>
                            <input type="text" class="form-control" id="f" name="e4">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <h2 style="color:#7efff5">The ressult: {{$areaQuadrangle}} </h2>
                </div>
            </div>
        </div>
    </body>
</html>