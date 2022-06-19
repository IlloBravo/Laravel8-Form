<!DOCTYPE html>
<html>
<head>
    <title> Ejemplo de formulario con Laravel 8</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        @if(session('status'))
            <div class="alert alert-succes">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Laravel 8 - Ejemplo de formulario para añadir publicacion de BLOG
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('store-form') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Título </label>
                        <input type="text" id="title" name="title" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Descripcción </label>
                        <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"> Enviar </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
