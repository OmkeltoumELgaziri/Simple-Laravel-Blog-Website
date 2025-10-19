<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Professional Account</title>

    <!-- Add Font Awesome for the arrow icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --gray-light: #f3f4f6;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --radius: 18px;
            --font: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font);
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at 20% 20%, #c7d2fe 0%, #fef3c7 60%, #c7d2fe 100%);
            overflow-x: hidden;
            overflow-y: auto;
            margin: 0;
            padding: 20px;
            position: relative;
        }

        body::before, body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            opacity: 0.12;
            z-index: -1;
        }

        body::before {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #6366f1 0%, transparent 70%);
            top: -200px;
            left: -150px;
        }

        body::after {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #f59e0b 0%, transparent 70%);
            bottom: -200px;
            right: -150px;
        }

        .guest-layout {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .authentication-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 2rem 2.5rem;
            width: 100%;
            max-width: 380px;
            box-shadow: var(--shadow);
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-height: 90vh;
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.25rem;
            text-align: center;
        }

        .card-subtitle {
            color: #6b7280;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-group {
            text-align: left;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.3rem;
            color: #374151;
        }

        .input {
            width: 100%;
            padding: 0.7rem 1rem;
            border: 1.5px solid #e5e7eb;
            border-radius: 12px;
            background-color: var(--gray-light);
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .input:focus {
            outline: none;
            border-color: var(--primary);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15);
        }

        .button {
            width: 100%;
            padding: 0.9rem;
            font-weight: 600;
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            background: linear-gradient(90deg, #4f46e5, #6366f1);
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .button:hover {
            background: linear-gradient(90deg, #4338ca, #4f46e5);
            transform: translateY(-1px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #6b7280;
            text-decoration: none;
            font-size: 0.85rem;
        }

        a:hover {
            color: #4698e5ff;
        }

        .form-footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.8rem;
            margin-top: 1.5rem;
        }

        .login-text {
            font-size: 0.9rem;
            color: #6b7280;
        }

        .login-link {
            color: var(--primary);
            font-weight: 600;
            margin-left: 0.25rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #4338ca;
        }

        /* Back button positioned on the left side of the page */
        .back-btn {
            position: fixed;
            left: 30px;
            top: 8%;
            transform: translateY(-50%);
            background: rgba(79, 70, 229, 0.9);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: white;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            z-index: 100;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .back-btn:hover {
            background: rgba(67, 56, 202, 0.9);
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .back-btn i {
            font-size: 1.3rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .back-btn {
                left: 15px;
                width: 45px;
                height: 45px;
            }
            
            .back-btn i {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .back-btn {
                left: 10px;
                width: 40px;
                height: 40px;
                top: 20px;
                transform: none;
            }
            
            .back-btn i {
                font-size: 1.1rem;
            }
            
            .authentication-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Back button positioned on the left side of the page -->
    <a href="/" class="back-btn">
        <i class="fas fa-arrow-left"></i>
    </a>
    
    <x-guest-layout>
        <div class="guest-layout">
            <x-authentication-card>
                <!-- Removed Jetstream logo -->
                <x-slot name="logo"></x-slot>

                <div class="card-header">
                    <h1 class="card-title">Welcome Back</h1>
                    <p class="card-subtitle">Log in to your account</p>
                </div>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="form-group">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="input block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="form-group">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="form-footer">
                        @if (Route::has('password.request'))
                            <a class="login-link" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button type="submit" class="button">{{ __('Log in') }}</button>

                        <p class="login-text">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="login-link">Sign up</a>
                        </p>
                    </div>
                </form>
            </x-authentication-card>
        </div>
    </x-guest-layout>
</body>
</html>