@extends('admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add {{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }} <small>{{ __('Register') }}</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="POST" action="{{ route('register') }}"
                                  enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="role_id">Select
                                        Role <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <select name="role_id" id="role_id"
                                                class="form-control @error('role_id') is-invalid @enderror"
                                                required="required">
                                            <option value="">Select Role</option>
                                            @foreach($role as $roles)
                                                <option
                                                    value="{{$roles->id}}" {{ (old('role_id') == $roles->id) ? 'selected' : '' }}>{{$roles->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first_name">{{ ucwords(str_replace('_',' ','first_name')) }} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="first_name" class="form-control @error('first_name') is-invalid @enderror"
                                               name="first_name" value="{{ old('first_name') }}" placeholder="First Name e.g John"
                                               required="required" autocomplete="first_name" autofocus type="text">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last_name">{{ ucwords(str_replace('_',' ','last_name')) }} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                               name="last_name" value="{{ old('last_name') }}" placeholder="Last Name e.g Doe"
                                               required="required" autocomplete="last_name" autofocus type="text">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="email">{{ __('E-Mail Address') }} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required="required" autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirm
                                        Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email2" name="confirm_email"
                                               data-validate-linked="email" value="{{ old('email') }}"
                                               required="required" class="form-control" autocomplete="email">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="phone">{{__('Contact Number')}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="number" id="phone" name="phone" required="required"
                                               value="{{ old('phone') }}" data-validate-length-range="10,15"
                                               class="form-control @error('phone') is-invalid @enderror">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('date_of_birth') bad @enderror">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="date_of_birth">{{ ucwords(str_replace('_',' ','date_of_birth')) }} <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="date_of_birth" type="date" name="date_of_birth"
                                               value="{{ old('date_of_birth') }}" class="optional form-control"
                                               required>
                                        @error('date_of_birth')
                                        <div class="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="facebook">{{ ucwords(str_replace('_',' ','facebook')) }}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="facebook" type="url"
                                               placeholder="{{ ucwords(str_replace('_',' ','facebook')) }}"
                                               value="{{ old('facebook') }}" name="facebook"
                                               class="optional form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="instagram">{{ ucwords(str_replace('_',' ','instagram')) }}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="instagram" type="url"
                                               placeholder="{{ ucwords(str_replace('_',' ','instagram')) }}"
                                               value="{{ old('instagram') }}" name="instagram"
                                               class="optional form-control">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="twitter">{{ ucwords(str_replace('_',' ','twitter')) }}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="twitter" type="url" name="twitter"
                                               placeholder="{{ ucwords(str_replace('_',' ','twitter')) }}"
                                               value="{{ old('twitter') }}" class="optional form-control">
                                    </div>
                                </div>

                                <div class="item form-group @error('about') bad @enderror">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="about">{{ ucwords(str_replace('_',' ','about')) }}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="about" placeholder="{{ ucwords(str_replace('_',' ','about')) }}"
                                                  name="about" class="form-control"
                                                  required="required">{{ old('about') }}</textarea>
                                        @error('about')
                                        <div class="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('address') bad @enderror">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                           for="address">{{ ucwords(str_replace('_',' ','address')) }}
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <textarea id="address"
                                                  placeholder="{{ ucwords(str_replace('_',' ','address')) }}"
                                                  name="address" class="form-control"
                                                  required="required">{{ old('address') }}</textarea>
                                        @error('address')
                                        <div class="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="item form-group @error('password') bad @enderror">
                                    <label for="password"
                                           class="col-form-label col-md-3 label-align">{{ __('Password') }}</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password" type="password" name="password" data-validate-length="8,10"
                                               title="Minimum 8 Characters"
                                               class="form-control @error('password') is-invalid @enderror"
                                               required="required" autocomplete="new-password">
                                        <span style="position: absolute;right:15px;top:7px;" id="hideshow">
                                            <i id="slash" class="fa fa-eye-slash" style="display: none"></i>
                                            <i id="eye" class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                    @error('password')
                                    <div class="alert">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="password-confirm" class="col-form-label col-md-3 col-sm-3 label-align ">Repeat
                                        Password</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="password-confirm" type="password" name="password_confirmation"
                                               data-validate-linked="password" class="form-control" required="required"
                                               autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Profile
                                        Picture <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset('assets/admin/images/placeholder.png')}}"
                                                     class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="image" name="image" accept=".jpg,.png">
                                                    <input type="text" id="image" name="image" value="" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('admin') }}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
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
@section('page_js')
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
    <script>
        document.querySelector('#hideshow').addEventListener('click', () => {
            let password = document.getElementById('password');
            let slash = document.getElementById('slash');
            let eye = document.getElementById('eye');

            if (password.type === 'password') {
                password.type = 'text';
                slash.style.display = 'block';
                eye.style.display = 'none';
            } else {
                password.type = 'password';
                eye.style.display = 'block';
                slash.style.display = 'none';
            }
        })
    </script>
@endsection
