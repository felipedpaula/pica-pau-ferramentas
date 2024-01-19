<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    @include('site.includes.css-default')
    <link rel="stylesheet" type="text/css" href="assets/cms/css/iofrm.css">
    <link rel="stylesheet" type="text/css" href="assets/cms/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/site/css/bootstrap.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="cms-logo mb-5">
                        <a href="/"><img width="200px" class="" src="{{asset('assets/site/images/logos-text/logo_amarelo.svg')}}" alt="Pica Pau"></a>
                    </div>
                    <div class="form-items">
                        <h3 class="mb-4">Login</h3>
                        <form method="POST" action="{{route('login')}}">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Senha" required>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Lembrar de mim') }}
                            </label>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
