@extends('dashboard')


@section('content')
    <div class="col-lg-8">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Page de configuration</h5>

                @if (session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Vertical Form -->
                <form class="row g-3" action="{{ route('config.update', $config->id) }}" method="POST" autocomplete="off"> 
                  @csrf
                  {{ method_field('PUT') }}
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Section à propos</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                          {{ $config->description }}
                        </textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Numéro de téléphone 1</label>
                        <input type="tel" name="tel_1" value="{{ $config->tel_1 }}" class="form-control"
                            id="inputEmail4">
                    </div>


                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Numéro de téléphone 2</label>
                        <input type="tel" name="tel_2" value="{{ $config->tel_2 }}" class="form-control"
                            id="inputEmail4">
                    </div>


                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" id="email" value="{{ $config->email }}"
                            name="email">
                    </div>


                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Lien de la boutique sur estuaire achat</label>
                        <input type="text" class="form-control" id="boutique_link" value="{{ $config->boutique_link }}"
                            name="boutique_link">
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>

    </div>
@endsection
