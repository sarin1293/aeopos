@extends('layouts.app')
@section('title', __( 'lang_v1.all_sales'))

@section('content')


<section class="content-header no-print">
    <h2>No Attend</h2>
    <a href="{{url('/attendant/create')}}" class="btn btn-success">Add New</a>
</section>



<section class="content no-print">
      <table  class="table table-bordered table-striped ajax_view">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($objDatas as $objData)
                    <tr>
                        <td>{{ $objData->id }}</td>
                        <td>{{ $objData->User->first_name . ' '. $objData->User->last_name }}</td>
                        <td>{{ $objData->started_at . ' '. $objData->ended_at }}</td>
                        <td>{{ $objData->status }}</td>
                        <td><a href="{{ url('/attendant') }}/{{$objData->id}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
      </table>
      {{ $objDatas->links() }}
</section>
@endsection