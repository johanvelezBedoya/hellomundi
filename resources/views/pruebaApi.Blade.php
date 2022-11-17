<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efecto cristal CSS</title>
</head>
<body>
    <div class="card">
        <h3 class="card-title">Efecto cristal CSS</h3>
        <p>Aprende a crear tu efecto cristal mediante CSS desde 0.</p>
        <a href="">Saber más</a>
    </div>
</body>
</html>


<style>
    body {
  padding: 5rem;
  margin: 0;
  background-image: url(https://images.unsplash.com/photo-1614670453169-89b992542686?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
  background-size: cover;
  font-family: sans-serif;
  background-position: center;
}



.card {
  width: 20rem;
  height: auto;
  padding: 2rem;
  border-radius: 1rem;
  font-size: 1rem;
  color:white;

}

.card-title {
  margin-top: 0;
  margin-bottom: .5rem;
  font-size: 1.2rem;
  font-weight: 600;
}
.card p{
  margin-bottom: 1.5rem;
}
a {
  background-color: #6363db;
  border-radius: 0.5rem;
  color: white;
  padding: 0.5rem 1rem;
  text-decoration: none;
} 

.card {
 background: rgba(255, 255, 255, .3);
 -webkit-backdrop-filter: blur(5px);
 backdrop-filter: blur(5px);
 border: 1.5px solid rgba(209, 213, 219, 0.3);
}
</style>




{{-- @foreach ($publicaciones as $publicacione)
    <h5>{{$publicacione['descripcion']}}</h5>
    @foreach ($publicacione['reacciones'] as $reaccione)
    @endforeach

      <?php
       $emprendimiento = $publicacione['emprendimiento'];
      ?>

        <h5>{{$emprendimiento['nombre_emprendimiento']}}</h5>

    @foreach ($publicacione['comentarios'] as $comentario)
        <h5>{{$comentario['user_id']}}</h5>
    @endforeach
    <hr>
@endforeach --}}