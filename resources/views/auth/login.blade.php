<x-guest-layout>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://scontent.fceb8-1.fna.fbcdn.net/v/t39.30808-6/455747819_2514337045623040_3591389809117143274_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEUqViC4cwzInvEdKf4NQAG-hBVDAqB7Uj6EFUMCoHtSOWZfbGWphcuyGS-6-bTXqNM1v_wTo7WXncaQk8BNZry&_nc_ohc=ER9Km36rjKgQ7kNvgELIslw&_nc_zt=23&_nc_ht=scontent.fceb8-1.fna&_nc_gid=AYSx9WyBmmRHUmwKuNxMICy&oh=00_AYCZmzWks4OG5mcQu7DZfk7m5_ioin8daAEdZoiPLIz1vw&oe=66E09CEC') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <div class="flex w-75 ">
        <div class="bg-green-200 bg-opacity-80 p-8 rounded-lg shadow-lg w-96">
            <div class="flex justify-center mb-4">
                <a href="/">
                    <img src="https://scontent.fceb8-1.fna.fbcdn.net/v/t39.30808-6/455949693_2514337008956377_6947541719723993411_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGNQVl-H17WLJyrkKxoka1G2K6pik0hXIfYrqmKTSFch2uvGahsXfCZb-3T9OHAGwkDlWAcyZCCnSjrj9zTRGkO&_nc_ohc=Dk9zT_pI7UUQ7kNvgGAHOXf&_nc_zt=23&_nc_ht=scontent.fceb8-1.fna&oh=00_AYD3-wjXbhhc1ASjges1q-bHEaaPKefxwO8C3FSZISLsdg&oe=66E0C8DD" alt="Salus Institute of Technology" class="w-40 rounded-lg">
                </a>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- ID Number -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mb-6">
                    <!-- Remember Me Checkbox -->
                    <div class="flex items-center mb-2">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Forgot Password Link -->
                    @if (Route::has('password.request'))
                        <div>
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                </div>

                <div class="flex items-center justify-center">
                    <x-primary-button class="w-auto bg-black hover:bg-gray-800 text-white py-2 px-4 rounded-md text-center">
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
