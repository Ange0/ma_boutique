@extends('layouts.master')
@section('content')
<main id="content" class="main-content-wrapper">
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-md-offset-2">
                    <div class="login-reg-box bg--white">
                        <form  method="POST" class="form" action="{{ route('authenticate')}}">
                            @csrf
                            <div class="form__group mb--20">
                                <label class="form__label" for="username_email">
                                   Adresse e-mail <span>*</span>
                                </label>
                                <input type="text" name="email" id="email" class="form__input">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="password">
                                    Mot de passe <span>*</span>
                                </label>
                                <input type="password" name="password" id="password" class="form__input">
                            </div>
                            <div class="form__group d-flex align-items-center">
                                <button type="submit" class="btn btn-5 btn-style-1 color-1">Se connecter</button>
                                <div class="form__checkbox--group ml--20">
                                    <input type="checkbox" name="sessionStore" id="sessionStore" class="form__checkbox">
                                    <label for="sessionStore" class="form__checkbox--label">Se souvenir de moi/label>
                                </div>
                            </div>
                            <a href="#" class="forgot-pass">Mot de passe oublié?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection