<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
      <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation"  
      style="padding-left:20px;
             padding-right:20px; 
             margin-left:90px;
             margin-right:90px;
             margin-top:20px;
             ">
          <div class="navbar-brand" >
            <a class="navbar-item" href="/">
              PostMiong
            </a>
        
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>
        
          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item" href='/'>
                Home
              </a>
        
              <a class="navbar-item" href='/about'>
                About
              </a>

              <a class="navbar-item" href='/contact'>
                Contact 
              </a>
        
              {{-- <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  More
                </a>
        
                <div class="navbar-dropdown">
                  <a class="navbar-item">
                    About
                  </a>
                  <a class="navbar-item">
                    Jobs
                  </a>
                  <a class="navbar-item">
                    Contact
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item">
                    Report an issue
                  </a>
                </div>    
              </div> --}}
            </div>
        
            <div class="navbar-end">
              <div class="navbar-item">
                <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  
                </a>
        
                <div class="navbar-dropdown">
                  <a class="navbar-item">
                    About
                  </a>
                  <a class="navbar-item">
                    Jobs
                  </a>
                  <a class="navbar-item">
                    Contact
                  </a>
                  <hr class="navbar-divider">
                  <a class="navbar-item">
                    Report an issue
                  </a>
                </div>
              </div>
              </div>
            </div>
          </div>
        </nav>
      <br><br>

      <br><br>
        <div class="container">
            @yield('content')
        </div>

  </body>
</html>