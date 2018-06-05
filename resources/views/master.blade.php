<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/css/boostrap.css">
</head>
<body>
  <div class="bg-info text-white p-5">
    <a href="{{route('posts.index')}}" class="btn btn-secondary">Home</a>
    <a href="{{route('posts.create')}}" class="btn btn-secondary">Create Post</a>
    @auth
    <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
    @csrf
    <button class="btn btn-secondary">Logout</button>
    </form>
    @else
    <a href="{{route('login')}}" class="btn btn-secondary float-right">Login</a>
    @endauth
  </div>
 <div class="container mt-5">

 @yield('content')
 </div> 
 <div class="bg-dark text-white p-4 mt-2 text-center">
  All Right Reserved Riad {{date('Y')}}
   
 </div>
  }
  }
</body>
</html>