@extends('user.app')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <!-- Breadcrumbs content here if needed -->
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <h2 class="btn btn-success">{{ __('Register') }}</h2>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your username">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password">
                                </div>

                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" id="jk">
                                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="no_tlp">No HP</label>
                                    <input type="number" class="form-control" name="no_tlp" id="no_tlp" placeholder="Enter your phone number">
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
</main>
@endsection
