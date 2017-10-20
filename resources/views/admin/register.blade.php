<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng ký</title>
<base href="{{asset('')}}" >
    <!-- Bootstrap Core CSS -->
    <link href="backend/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="backend/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="backend/assets/css/custom.css" rel="stylesheet" />
    <link href="backend/assets/css/style-login.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class="container">
        <div id="login-box">
            <div class="logo">
                <img src="{{asset('uploads/logo/logo-login.jpg')}}" width="84px" class="img img-responsive img-circle center-block"/>
                <h1 class="logo-caption"><span class="tweak">Đ</span>ăng ký</h1>
            </div><!-- /.logo -->
            <div class="controls">
                 @if(count($errors)>0)
                            
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                            
                        @endif
                        @if(session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                        @endif
                <form role="form" action="{{url('register')}}" method="POST">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <input type="text" name="user_reg" placeholder="Username" class="form-control" autofocus/>
                    <input type="email" name="email_reg" placeholder="Email" class="form-control" autofocus/>
                    <input type="password" name="password_reg" placeholder="Mật khâu" class="form-control" />
                    <input type="password" name="password_again_reg" placeholder="Nhập lại mật khẩu" class="form-control" />

                    <div class="checkbox-inline">
                      <label><input type="radio" value="nguoi_ban" name="level"><span style="color:#FFF">Người bán</span></label>
                    </div>
                    <div class="checkbox-inline">
                      <label><input type="radio" checked="" value="nguoi_mua" name="level"><span style="color:#FFF" >Người mua</span></label>
                    </div>
                   
                    </div>
 
                    <button type="submit" class="btn btn-default btn-block btn-custom">Đăng ký</button>
                </form>
                 <a href="{{url('login')}}" class="btn btn-default btn-block btn-custom">Đăng nhập</a>
                <div class="social-login">
                <p class="sociallogin-by"> - - - - - Đăng ký qua - - - - - </p>
                <ul>
                    <li><a href="{{url('facebook/redirect')}}"><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i> Google+</a>
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    </li>
                    <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                </ul>
                </div>
            </div><!-- /.controls -->
        </div><!-- /#login-box -->
    </div><!-- /.container -->
    <div id="particles-js"></div>


  

    <!-- jQuery -->
      <script src="backend/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="backend/assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="backend/assets/js/custom.js"></script>
    <script type="text/javascript">
    $.getScript("backend/assets/js/particles.js", function(){
    particlesJS('particles-js',
      {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }
    );

});

</script>

</body>

</html>
