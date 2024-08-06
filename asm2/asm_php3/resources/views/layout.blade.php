<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Danh sách sách')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
  <img src="https://theme.hstatic.net/200000265619/1001091352/14/banner.jpg?v=661" class="w-100" alt="">
    <div class="container">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
              <div class="container-fluid">
                <a class="navbar-brand" href="/shoes"><img style="max-width:60px" src="https://drake.vn/image/catalog/H%C3%ACnh%20content/converse-chuck-taylor-all-star-logo-play/Converse-chuck-taylor-all-star-logo-play-7.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    
                  

                  </ul>
                </div>
              </div>
            </nav>

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
