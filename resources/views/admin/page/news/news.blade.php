@extends('admin.layouts.layout')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Xeberler</h4>

                        <div class="page-title-right">
                           <a href="{{ route('admin.news.create')}}" class="btn btn-success">

                                <i class="fas fa-plus"></i> Əlavə et
                           </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">ID</th>
                                                <th class="align-middle">Image</th>
                                                <th class="align-middle">Title</th>
                                                <th class="align-middle">Description</th>
                                                <th class="align-middle"> Əməliyyatlart</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @foreach ($news as $allNews)

                                            <tr>
                                                <td>{{$allNews->id}}</td>
                                                <td><img src="{{url($allNews->foto)}}" alt="User Image" class="td-image"></td>
                                                <td>{{$allNews->title}}</td>
                                                <td>{{$allNews->description}}</td>
                                                <td>
                                                   <a href="{{ route('admin.news.edit', $allNews->id) }}" class="btn btn-outline-success btn-icon" title="Redaktə et">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('admin.news.delete', $allNews->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Silmək istədiyinizə əminsiniz?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-icon" title="Sil">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>

@endsection
@push('scripts')
    <script src="{{asset('/assets/adminpanel/js/modules/template.js?v='.time())}}"></script>
@endpush
