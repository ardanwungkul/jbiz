<nav class="navbar navbar-expand-lg bg-body-tertiary shadow navbar-dark bg-dark ">
  <div class="container-fluid">
    
    {{-- NAVBAR LOGO --}}
      <a class="navbar-brand p-0" href="/">
        <img src="https://jasawebsite.biz/wp-content/uploads/2021/08/New-Project.png" height="50" class="d-inline-block " alt="">
      </a>
      
    {{-- NAVBAR MENU --}}
      <div class="collapse navbar-collapse justify-content-between pl-3 " id="navbarNav">
          <div>
          </div>

          {{-- NAVBAR MENU CENTER --}}
            <div class="gap-4 d-flex align-items-center " >
              <a style="text-decoration: none" href="/" class="text-white">Home</a>
              <a style="text-decoration: none" href="" class="text-white">About</a>
              <a style="text-decoration: none" href="" class="text-white">Contact</a>
      
              @if (Auth::user() &&  Auth::user()->isAdmin == true)
                @auth
                  <div class="dropdown">
                    <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Database
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">User</a></li>
                      <li><a class="dropdown-item" href="#">Pelanggan</a></li>
                      <li><a class="dropdown-item" href="{{ route('domain.index') }}">Domain</a></li>
                      <li><a class="dropdown-item" href="#">Nameserver</a></li>
                    </ul>
                  </div>
                @endauth
              @endif

            </div>

          {{-- NAVBAR MENU END --}}
              @if (Route::has('login'))
                @auth
                <div class="dropdown ">
                  <button class=" font-nav btn text-white bg-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Hello ,
                    {{ Auth::user()->name }}
                  </button>
                  <ul class="dropdown-menu mt-2 dropdown-menu-end ">
                    <li><a class="dropdown-item " href="{{route('profile.edit')}}">Profile</a></li>
                    <li>
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class=" dropdown-item dditem ">
                          {{ __('Logout') }}
                        </button>
                      </form>  
                  </li> 
                  </ul>
                  
                </div>
                  @else
                
                <div class="d-flex gap-2  rounded mr-2 py-1 px-2 login">  
                  <i class="bi bi-box-arrow-in-right"> </i>
                  <a href="{{ route('login') }}" class="text-white">Sign In</a>
                </div>
                
                @endauth
                @endif
            
      </div>
  </div>
</nav>