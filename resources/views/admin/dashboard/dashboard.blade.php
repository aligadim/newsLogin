@extends('admin.layouts.layout')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Müraciyətlər</h4>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="align-middle">ID</th>
                                            <th class="align-middle">Ad</th>
                                            <th class="align-middle">Soyad</th>
                                            <th class="align-middle">Telefon</th>
                                            <th class="align-middle">Email</th>
                                            <th class="align-middle">Mesaj</th>
                                            <th class="align-middle">Tarix</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
                                            @foreach ($contacts as $contact)
                                            <td>{{ $contact->id }} </td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->surname }} </td>
                                            <td>{{ $contact->phone }} </td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at->format('d.m.Y H:i') }}</td>
                                        </tr>
                                         @endforeach --}}


                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
