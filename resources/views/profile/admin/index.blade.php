<x-admin-layout title="Profile" header="Profile">
    <div class="section-body">
        <h2 class="section-title">Hi, <b>{{ auth()->user()->name }}</b> !</h2>
        <p class="section-lead">
            {{ __('This is your profile page. You can edit your profile data here.') }}
        </p>

        <div class="row mt-sm-4">

            <div class="col-12 col-md-12 col-lg-8">
                <x-admin.form action="{{ route('admin.profile.update') }}" overwrite="PUT">
                    <x-admin.card header="Change Information" id="changeInformation">
                        <x-admin.div-form-group class="col-lg-6">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ auth()->user()->email }}" required />
                            <x-admin.invalid-feedback message="Please fill in your email" />
                        </x-admin.div-form-group>
                        <x-admin.div-form-group class="col-lg-6">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ auth()->user()->name }}" required />
                            <x-admin.invalid-feedback message="Please fill in your name" />
                        </x-admin.div-form-group>
                    </x-admin.card>
                </x-admin.form>

                <x-admin.form action="{{ route('admin.password.update') }}" overwrite="PUT">

                    <x-admin.card header="Change Password" id="changePassword">
                    <input type="hidden" name="token" value="{{ csrf_token() }}" id="token">
                    <input type="hidden" value="{{ auth()->user()->email }}" name="email" id="email">

                        <x-admin.div-form-group>
                            <label for="current_password">{{ __('Current Password') }}</label>
                            <input type="password" name="current_password" id="current_password" class="form-control"
                                required />
                            <x-admin.invalid-feedback message="Please fill in the current password" />
                        </x-admin.div-form-group>
                        <x-admin.div-form-group>
                            <label for="password">{{ __('New Password') }}</label>
                            <input type="password" name="password" id="password" class="form-control" required />
                            <x-admin.invalid-feedback message="Please fill in the new password" />
                        </x-admin.div-form-group>
                        <x-admin.div-form-group>
                            <label for="password_confirmation">{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" required />
                            <x-admin.invalid-feedback message="Please fill in the password confirmation" />
                        </x-admin.div-form-group>
                    </x-admin.card>
                </x-admin.form>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card card-primary profile-widget">
                    <div class="profile-widget-header">
                        <img alt="avatar" src="{{ asset(auth()->user()->avatar) }}"
                            class="rounded-circle profile-widget-picture" />
                    </div>
                    <div class="card-footer  row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <form method="POST" action="{{ route('admin.avatar.update') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="avatar" name="avatar">
                                            </span>
                                        </span>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <img id="img-upload" class="my-2"/>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $(document).on('change', '.btn-file :file', function() {
                    var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;

                    if (input.length) {
                        input.val(log);
                    } else {
                        if (log) alert(log);
                    }

                });

                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#img-upload').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#avatar").change(function() {
                    readURL(this);
                });
            });
        </script>
    @endpush
    @push('css')
        <style>
            .btn-file {
                position: relative;
                overflow: hidden;
                border: 1px solid #dadada;
                box-shadow: 1px 1px 1px #c6c6c6;
                height: 42px;
                line-height: 32px;
                size: 14px;
            }

            .input-group-btn:hover .btn-file,
            .input-group-btn:active .btn-file,
            .input-group-btn:focus .btn-file {
                border: 1px 1px 1px #c6c6c6;
                background: #c6c6c6;
            }

            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }

            #img-upload {
                width: 100%;
            }
        </style>
    @endpush
</x-admin-layout>
