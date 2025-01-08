@extends('dashboard')


@section('content')
    <div class="col-lg-8">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ajouter une formation moto</h5>


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
                <form class="row g-3" action="{{ route('formation.store') }}" method="POST" autocomplete="off">
                    @csrf

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Titre</label>
                        <input type="text" name="name" value="{{old('name') }}" class="form-control"
                            id="inputEmail4">
                    </div>

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">
                          {{ old('description') }}
                        </textarea>
                    </div>
   

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>

    </div>
@endsection
