@extends('layouts.app')
@section('content')

@if (count($companies) > 0)
<div id="comp_list_container">
    <div id="comp_list">
        @foreach ($companies as $company)
        <ul>
            <li>会社名：{{ $company->com_name }}</li>
            <li>社長：{{ $company->incharge_name }}</li>
            <li>所在地：{{ $company->prefecture }}</li>
        </ul>
        @endforeach
    </div>
    <div class="paginate_container">
        <div class="paginate_items">
           {{ $companies->links()}}
         </div>
    </div>
</div>
@endif

    
@endsection