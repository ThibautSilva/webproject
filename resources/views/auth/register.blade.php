@extends('default')

@section('register')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="register">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Nom*</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                               value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Prénom*</label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname"
                                               value="{{ old('firstname') }}">

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Adresse e-mail*</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Mot de passe*</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirmez votre mot de
                                        passe*</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('telFixe') ? ' has-error' : '' }}">
                                    <label for="telFixe" class="col-md-4 control-label">Téléphone fixe</label>

                                    <div class="col-md-6">
                                        <input id="telFixe" type="text" class="form-control" name="telFixe">

                                        @if ($errors->has('telFixe'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telFixe') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('telPortable') ? ' has-error' : '' }}">
                                    <label for="telPortable" class="col-md-4 control-label">Mobile</label>

                                    <div class="col-md-6">
                                        <input id="telPortable" type="text" class="form-control" name="telPortable">

                                        @if ($errors->has('telPortable'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('telPortable') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                    <label for="fax" class="col-md-4 control-label">Fax</label>

                                    <div class="col-md-6">
                                        <input id="fax" type="text" class="form-control" name="fax">

                                        @if ($errors->has('fax'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('droit') ? ' has-error' : '' }}">
                                    <label for="droit" class="col-md-4 control-label">Administrateur</label>

                                    <div class="col-md-6">
                                        <input id="droit" type="checkbox" name="droit" class="checkbox">

                                        @if ($errors->has('droit'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('droit') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Inscription
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
