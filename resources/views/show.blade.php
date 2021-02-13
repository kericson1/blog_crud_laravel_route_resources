<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <h2><a href="{{route('member.create')}}">Ajouter</a></h2>
        <h1 class="jumbtron">Bienvenue sur mon Blog</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nom}}</td>
                    <td>{{$data->prenom}}</td>
                    <td>{{$data->filiere}}</td>
                </tr>
              @endforeach

            </tbody>
          </table>
    </div>


</body>
</html>
