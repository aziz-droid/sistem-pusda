<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Dashboard Template · Bootstrap v5.3</title>
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    


    {{-- date picker --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

 
  $(document).ready(function() {
    $('[data-provide="datepicker"]').datepicker();
  });

  </script>
   {{-- font awesome --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-rYxJ2mjMe9cm+gezg8uJ+f+3n+6WYSYRXJIMCs3jLOgCJRe6t9dz+YMX29TQhHbGJqoyJvEh+4gXCZ/0TpLg+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  
<body>
  <div class="container-fluid ">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse p-0">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <li class="nav-item">
                   <img src="{{ asset('img/logo.svg') }}" alt="" width="130px" class="d-flex mx-auto mb-5">
                  </li>
              </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'dashboard' ? 'active btn btn-primary text-white m-2' : '' }} " aria-current="page" href="/">
              <span data-feather="home" class="align-text-bottom"></span>
              DASHBOARD
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === 'pusda' || $title === 'pusda/*' ? 'active btn btn-primary text-white m-2' : '' }}" href="/pusda">
              <span data-feather="file" class="align-text-bottom"></span>
              PUSDA JATIM
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>DATA UPT</span>
        </ul>   
      </div>
    </nav>
    

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $header }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="nav-item text-nowrap">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, <p class=" d-inline me-2">Skripsi </p> 
                <i class="bi bi-person-circle fs-3 align-middle"></i>
              </a>
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item " href="#"><i class="bi bi-box-arrow-right "></i>  Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>


{{-- ISI KONTEN  --}}


<div style="margin-left: 18%"> 
@yield('container')
</div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src=""></script>
      <script src="{{ asset('/js/dashboard.js') }}">
    
      </script>
</body>
</html>
