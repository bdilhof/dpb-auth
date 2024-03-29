<x-ui.layout.guest>

    <div class="h-100 w-100">
        <div class="d-flex w-100 h-100 justify-content-center align-items-center">
            <div>

                <!-- Logo -->
                <div class="text-center mb-4">
                    <x-ui.logo />
                </div>

                <!-- Title -->
                <div class="mb-4 text-center">
                    <h1 class="h3">{{ config('app.name') }}</h1>
                </div>

                <div class="bg-white p-4">

                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label id="login" for="login" class="form-label">{{ trans("auth.personal_number") }}</label>
                            <input @class(['form-control', 'is-invalid' => false]) type="text" name="login" :value="old('login')" required autofocus autocomplete="username" placeholder="12345" />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ trans("auth.password") }}</label>
                            <input id="password" @class(['form-control', 'is-invalid' => false]) type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">
                                {{ trans('auth.remember_me') }}
                            </label>
                        </div>

                        <!-- Submit -->
                        <x-ui.buttons.submit :id="'submitLoginForm'" :loadingText="'Prihlasujem'" :text="trans('auth.login')" />
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-ui.layout.guest>