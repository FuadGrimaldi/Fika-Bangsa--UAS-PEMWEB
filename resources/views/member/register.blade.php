<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fika | Register</title>

    <link
      rel="icon"
      href="{{ asset('stream/assets/images/fika.png') }}"
      type="image/icon type"
    />
    <script
      src="https://kit.fontawesome.com/34a4b85963.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="{{ asset('stream/assets/css/style-sign.css') }}"
    />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
        @media screen and (max-width:680px){
          .container {
          margin-top: 3rem;
          }
          .forms {
          width: 84%;
          padding-top: 2rem;
          padding-bottom: 2rem;
          padding-left: 2rem;
          padding-right: 2rem;
          background-color: rgba(0, 0, 0, 0.8);
          border-radius: 1rem;
          margin-top: 0.5rem;
          }
          .logo {
            height: 70px;
            width: 130px;
          }
          .button-back {
          float: none;
          margin-top: 3rem;
          padding: 4px 18px;
          font-size: 90%;
          }
          .button-sign-up {
          font-size: 90%;
          padding: 4px 30px;
          margin-right: 1rem;
          }
          .warp p {
            font-size: 90%;
          }
          .title{
            font-size: 1rem;
          }
        }
    </style>
</head>

<body style="height: 700px;">
    <main>
        <nav class="navbar">
            <img
            src="{{ asset('stream/assets/images/fika.png') }}"
            alt="Logo"
            class="logo"
            />
            <div class="rigth-navbar">
                <div class="warp">
                    <p>Already registered?</p>
                    <div class="button-sign-up">
                        <a href="{{route ('member.login')}}">Sign In</a>
                    </div>
                </div>
                <div class="button-back">
                    <i class="fas fa-angle-double-left"></i>
                    <a href="/" style="float: right; padding-right: 1.2rem">back</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="overlay">
                <div class="form-container">
                    <form class="forms" action="{{ route('member.register.store') }}" method="post">
                        @csrf
                        <h2 class="title">Sign Up</h2>
                        <div class="user-data">
                            <div class="input-group" id="username-group">
                                <input class="input-field" type="text" name="name" id="name" value="{{ old('email')}}" placeholder="Name"/>
                                @error('name')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group" id="username-group">
                                <input class="input-field" type="number" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" />
                                @error('phone_number')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input class="input-field" type="email" name="email" id="email" value="{{ old('email')}}" placeholder="Email"/>
                                @error('email')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input
                                    class="input-field"
                                    type="password"
                                    id="password"
                                    name="password"
                                    value="{{ old('password')}}"
                                    placeholder="Password"
                                />
                                <input type="checkbox" onclick="showPasswd()"/>
                                <div class="validasi-input">Show password</div>
                                @error('password')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                            @error('credentials')
                            <div style="color: red">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="button">Sign Up</button>
                        <p class="account">
                            Already register?
                            <a href="{{route('member.login')}}" style="float: right">Sign In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
      <div class="footer-content">
        <div class="footer-left">
          <p id="description">
          Aplikasi Streaming Film Karya Anak Bangsa (FIKA Bangsa) diharapkan dapat menjadi solusi untuk mengatasi tantangan dengan Mewadahi Karya Film Anak Bangsa.
          </p>
        </div>
        <div class="footer-right">
          <p class="footer-year">
            &copy; 2023
            <span>
              <a href="">Fuad Grimaldi</a>
            </span>
          </p>
        </div>
      </div>
    </footer>
    <script type="text/javascript">
      function showPasswd() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>
</body>

</html>