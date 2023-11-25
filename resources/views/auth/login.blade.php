@extends("layout.auth")

@section("content")
<div class="card mt-5 mx-auto" style="max-width:400px;">
            <div class="card-body">
                <h1><center> Login </center></h1>
                <hr/>
                @if(Session::get("error"))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get("error")}}
                    </div>
                @endif
                
                <form action="{{route('post.login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" id="inputEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" id="inputPassword" class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                         <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <hr/>
                    <div class="mb-3 text-center">
                         <p>Have you not created an account yet? <a class="text-decoration-none" href="{{route('register')}}">Register now</a></p>
                    </div>
                </form>
            </div>
        </div>
@endsection
