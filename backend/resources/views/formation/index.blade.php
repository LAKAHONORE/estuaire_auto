@extends('dashboard')


@section('content')

    <div class="col-lg-12">
      <a href="{{route('formation.create')}}" class="btn btn-secondary" style="margin-bottom: 20px">
        Ajouter un formation moto
      </a>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Liste des formations moto</h5>



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
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Description</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse($formations as $formation)
                            @php
                                $i = $i + 1;
                            @endphp
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ ucfirst($formation->name) }}</td>
                                <td>{{ ucfirst($formation->description) }}</td>
                                <td>
                                    <a href="{{ route('formation.edit', $formation->id) }}" class="btn btn-primary"><i
                                            class="bi bi-pencil-fill"></i></a>
                                    &nbsp;
                                    &nbsp;
                                    <form action="{{ route('formation.destroy', $formation->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash3-fill"></i> </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr colspan="3">
                                Aucune donnée pour le moment !
                            </tr>
                        @endforelse

                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

    </div>
@endsection
