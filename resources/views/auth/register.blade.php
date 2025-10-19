<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>

      <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
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
    .authentication-card {
        background: #fff;
        border-radius: var(--radius);
        padding: 2rem 2.5rem;
        width: 100%;
        max-width: 380px;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        max-height: 90vh;
    }

    .authentication-card:hover {
        transform: translateY(-4px);
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


.form-container {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    padding: 40px;
    width: 400px;
    max-height: 90vh; /* limit height */
    overflow-y: auto; /* allow scrolling when content exceeds */
    display: flex;
    flex-direction: column;
    justify-content: center;
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
        padding: 1rem;
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

     /* Updated form footer styling to match login page */
    .form-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.8rem;
        margin-top: 1.5rem;
    }

    .register-text {
        font-size: 0.9rem;
        color: #6b7280;
        text-align: center;
        width: 100%;
    }

    .register-link {
        color: var(--primary);
        font-weight: 600;
        margin-left: 0.25rem;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .register-link:hover {
        color: #4338ca;
    }

    /* Updated button container styling */
    .button-container {
        display: block;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-top: 1.5rem;
    }

    .already-registered {
        margin-top:15px;
        text-align:center;
        font-size: 0.9rem;
        color: #6b7280;
    }

    .login-link {
        color: var(--primary);
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .login-link:hover {
        color: #4338ca;
      text-shadow: 0 0 10px #5046c3ff;
    
      
    }

/* ===== Password Strength Styles ===== */
.password-strength {
    margin-top: 6px;
}

.strength-meter {
    height: 6px;
    width: 100%;
    background: #e5e7eb;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 4px;
}

.strength-fill {
    height: 100%;
    width: 0%;
    border-radius: 4px;
    background-color: #dc2626;
    transition: width 0.3s ease, background-color 0.3s ease;
}

.strength-text {
    font-size: 0.85rem;
    color: #6b7280;
    transition: color 0.3s ease;
}

/* Password match hint styling */
.form-hint {
    font-size: 0.85rem;
    margin-top: 4px;
    transition: color 0.3s ease;
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
                <!-- Logo slot removed as requested -->
                <x-slot name="logo"></x-slot>

                <div class="card-header">
                    <h1 class="card-title">Create Your Account</h1>
                    <p class="card-subtitle">Join our platform to get started</p>
                </div>

                <x-validation-errors class="mb-4" />
<div class="-container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="form-group">
                        <x-label for="phone" value="{{ __('Phone') }}" />
                        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                    </div>

                    <div class="form-group">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="form-group">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                            <div class="strength-text" id="strengthText">Password strength</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <div class="form-hint" id="passwordMatchHint"></div>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <!-- Updated button container with "Already registered?" on the left -->
                    <div class="button-container">
                        
                        
                        <button type="submit" class="button">
                            {{ __('Register') }}
                        </button>
<br>
                        <div class="already-registered">
                            <a class="login-link" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </div>
                </form>

</div>            </x-authentication-card>
        </div>
    </x-guest-layout>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordConfirmInput = document.getElementById('password_confirmation');
            const passwordMatchHint = document.getElementById('passwordMatchHint');
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            // Password strength indicator
            if (passwordInput) {
                passwordInput.addEventListener('input', function() {
                    const password = passwordInput.value;
                    let strength = 0;
                    
                    // Check password length
                    if (password.length >= 8) strength += 25;
                    
                    // Check for lowercase letters
                    if (/[a-z]/.test(password)) strength += 25;
                    
                    // Check for uppercase letters
                    if (/[A-Z]/.test(password)) strength += 25;
                    
                    // Check for numbers and special characters
                    if (/[0-9]/.test(password)) strength += 15;
                    if (/[^A-Za-z0-9]/.test(password)) strength += 10;
                    
                    // Update strength meter
                    if (strengthFill) {
                        strengthFill.style.width = `${strength}%`;
                    }
                    
                    // Update strength text and color
                    if (strengthText) {
                        if (strength < 50) {
                            strengthFill.style.backgroundColor = '#dc2626'; // red
                            strengthText.textContent = 'Weak password';
                            strengthText.style.color = '#dc2626';
                        } else if (strength < 75) {
                            strengthFill.style.backgroundColor = '#d97706'; // amber
                            strengthText.textContent = 'Medium password';
                            strengthText.style.color = '#d97706';
                        } else {
                            strengthFill.style.backgroundColor = '#059669'; // green
                            strengthText.textContent = 'Strong password';
                            strengthText.style.color = '#059669';
                        }
                    }
                });
            }
            
            // Password confirmation check
            if (passwordConfirmInput && passwordMatchHint) {
                passwordConfirmInput.addEventListener('input', function() {
                    if (passwordInput.value !== passwordConfirmInput.value) {
                        passwordMatchHint.textContent = 'Passwords do not match';
                         passwordMatchHint.style.color = '#dc2626';
                        passwordMatchHint.className = 'form-hint error';
                    } else {
                        passwordMatchHint.textContent = 'Passwords match';
                        passwordMatchHint.style.color = '#059669';
                        passwordMatchHint.className = 'form-hint success';
                    }
                });
            }
        });
    </script>
</body>
</html>