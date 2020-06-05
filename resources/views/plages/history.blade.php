@extends('layouts.dash')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Plage Histories</div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>...</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach($plage->revisionHistory as $history)
                        <tr>
                          <td>{{ $history->userResponsible()->email }} à changé {{ $history->fieldName() }} depuis {{ $history->oldValue() }} à {{ $history->newValue() }}</td>
                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>    
            </div>
        </div>
    </div>


@endsection
