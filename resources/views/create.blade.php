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
        <h1 class="jumbtron">Creer sur un membre</h1>
        <form action="{{route('member.store')}}" method="POST">@csrf
            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="name@example.com" name="nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom(s)</label>
                <input type="text" class="form-control" id="prenom" placeholder="name@example.com" name="prenom">
              </div>

            <div class="form-group">
              <label for="filiere">Filière</label>
              <select class="form-control" id="filiere" name="filiere">
                <option value="RIT">RIT</option>
                <option value="IDA">IDA</option>
                <option value="RHCOM">RHCOM</option>
                <option value="GSCOM">GSCOM</option>
                <option value="TH">TH</option>
              </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
          </form>
    </div>


</body>
</html>
