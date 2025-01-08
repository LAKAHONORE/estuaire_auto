@extends('dashboard')


@section('content')

    <div class="col-lg-12">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Liste des contacts</h5>



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
                            <th scope="col">Nom / Raison sociale</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @forelse($contacts as $contact)
                            @php
                                $i = $i + 1;
                            @endphp
                            <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ ucfirst($contact->name) }}</td>
                                <td>{{ ucfirst($contact->tel) }}</td>
                                <td>{{ ucfirst($contact->email) }}</td>
                                <td>{{ ucfirst($contact->message) }}</td>
                                <td>
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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
