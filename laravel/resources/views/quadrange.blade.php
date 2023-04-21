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
</style>
    </head>
    <body>
        <h2> <center>Area of shape</center> </h2>
        <div class="container flex">
            <div style="width:404">
                <h2> <center>Area of Triangle</center> </h2>

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
                <h2>The result: {{ $areaTriangle}}</h2>
            </div>
            <div style="width:404">
                <h2><center>Area of Quadrangle</center></h2>
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
                <h2>The ressult: {{$areaQuadrangle}}</h2>
            </div>
        </div>
    </body>
</html>