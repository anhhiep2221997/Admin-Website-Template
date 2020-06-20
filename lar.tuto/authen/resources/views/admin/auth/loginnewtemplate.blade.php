@extends('admin.layouts.admin')

@section('content')

    <div id="page-wrapper" style="min-height: 398px; margin-left: 0;margin-bottom: 0">

        <div class="main-page login-page" >
            <h2 class="title1">{{ __('Login Admin') }}</h2>
            <div class="widget-shadow">
                <div class="login-body"style="background: orange">
                    <div style="text-align: center"><svg width="200px" height="200px"  viewBox="0 0 200 200" aria-labelledby="svg-title svg-desc">
                            <title id="svg-title">Floating Ghost</title>
                            <desc id="svg-desc">A smiling ghost that floats ups and down while looking at the user interactions.</desc>
                            <style type="text/css">
                                @keyframes float {
                                    from { transform: translate(0, 0px); }
                                    to   { transform: translate(0, 8px); }
                                }
                                @keyframes float-arm {
                                    from { transform: translate(-1px, 0px); }
                                    to   { transform: translate(1px, 4px); }
                                }
                                #ghost-body { animation: float 2s linear alternate infinite; }
                                .ghost-arm { animation: float-arm 3s linear alternate infinite; }
                                .pupil, #mouth, .ghost-arm { transition: all 0.25s; }
                            </style>
                            <g id="ghost-body" fill="white" stroke="#999" stroke-width="3" stroke-linejoin="round">
                                <path d="M 54,181 C 44,131 13,11 99,11 185,12 164,110 150,182 146,195 139,185 137,177 134,170 126,169 124,179 120,192 114,190 109,179 105,167 98,166 94,179 92,185 85,193 79,179 74,170 68,168 66,179 62,193 56,191 54,181 Z"></path>
                                <path id="eye-right" class="eye" fill="#ffffee" d="M 69,71 C 69,64 73,54 84,55 96,56 100,62 100,70 100,79 89,83 84,83 78,83 69,80 69,71 Z"></path>
                                <path id="eye-left" class="eye" fill="#ffffee" d="M 105,73 C 104,66 108,57 120,57 130,57 134,65 134,71 134,80 125,85 119,85 114,85 105,82 105,73 Z"></path>
                                <circle id="pupil-right" class="pupil" cx="84" cy="69" r="3" fill="rgba(0,0,0,0.25)"></circle>
                                <circle id="pupil-left" class="pupil" cx="120" cy="71" r="3" fill="rgba(0,0,0,0.25)"></circle>
                                <path id="mouth" d="M 75,115 C 79,120 91,126 101,125 110,125 126,118 127,114 125,117 117,125 101,125 85,126 79,117 75,115 Z" fill="#aa4040" stroke="#600"></path>
                                <path id="ghost-arm-right" class="ghost-arm" d="M 45,89 C 25,92 9,108 11,124 13,141 27,115 48,119"></path>
                                <path id="ghost-arm-left" class="ghost-arm" d="M 155,88 C 191,90 194,114 192,125 191,137 172,109 155,116" data-hover="M 155,88 C 145,68 105,51 103,62 102,74 123,117 155,116" style="animation-delay:-1s"></path>
                            </g>
                        </svg>
                    </div>
                    <form action="{{ route('admin.auth.loginAdmin') }}" method="post">
                        @csrf
                        <input id="email" type="email" class="user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <input id="password" type="password" class="lock @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <div class="forgot-grid">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <i></i>Remember me
                            </label>

                            @if (Route::has('password.request'))
                                <div class="forgot">
                                    <a href="{{ route('password.request') }}">forgot password?</a>
                                </div>

                            @endif
                            <div class="clearfix"> </div>
                        </div>
                        <input type="submit" name="Sign In" value="  {{ __('Login Admin') }}">
                        <div class="registration">
                            Don't have an account ?
                            <a class="" href="signup.html">
                                Create an account
                            </a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



@endsection
