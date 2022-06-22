@extends('layouts.app')
@section('content')

    <div class="container col-md-12">
        <section class="button mb-4">
            <a href="{{ asset('bank/create') }}" class="btn btn-info text-capitalize">Add New Bank</a>
        </section>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <div class="card-title">
                            <h2 class="card-title">Bank List</h2>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Branch</th>
                                    <th>Account No</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Banks as $Bank)
                                    <tr>
                                        <td>{{ $Bank->Name }}</td>
                                        <td>{{ $Bank->Branch }}</td>
                                        <td>{{ $Bank->AccountNo }}</td>
                                        <td>{{ $Bank->Address }}</td>
                                        <td>{{ $Bank->Phone }}</td>
                                        <td>{{ $Bank->Email }}</td>
                                        <td class="d-flex">
                                            <a href="" class="mr-3 text-purple" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View">
                                                 <svg data-v-9a6e255c="" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="invoice-row-5036-preview-icon" class="mx-1 feather feather-eye"><path data-v-9a6e255c="" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle data-v-9a6e255c="" cx="12" cy="12" r="3"></circle></svg>
                                            </a>
                                             <a class="" href="/bank/{{ $Bank->id }}/edit" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                 <i class="fa-regular fa-pen-to-square mr-3 text-orange"></i></i>
                                             </a>
                                            
                                             {{ Form::open(array('url' => '/bank/'.$Bank->id,'method' => 'DELETE')) }}
                                                 <button class="" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                     <i class="fa-regular fa-trash-can mr-3 text-danger"></i>
                                                 </button>
                                             {{ Form::close() }}
                                                    
                                         </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection