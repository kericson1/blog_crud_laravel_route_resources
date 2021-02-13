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
        @if(session('datas'))
        <div class="alert alert-success">
                    <p>{{session('datas')}} à été Modifié</p>
                </div>
        @endif

        <h1 class="jumbtron">Bienvenue sur mon Blog</h1>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datas as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nom}}</td>
                    <td>{{$data->prenom}}</td>
                    <td>{{$data->filiere}}</td>
                    <td>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a class="btn btn-primary" href="{{route('member.edit', $data->id)}}">Editer</a>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <form action="{{route('member.destroy', $data->id)}}" method="post">@csrf
                                    {{method_field('DELETE')}}
                                    {{-- <button class="btn btn-danger" name="delete">Supprimer</button> --}}
                                    <input class="btn btn-danger" type="submit" value="DELETE">
                                </form>
                                {{-- <a class="btn btn-danger" href="{{route('member.destroy', $data->id)}}">Supprimer</a> --}}
                            </div>
                        </div>
                    </td>
                </tr>
              @endforeach

            </tbody>
          </table>
    </div>


</body>
</html>
