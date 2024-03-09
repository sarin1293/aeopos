@extends('layouts.app')
@section('title', __( 'lang_v1.all_sales'))

@section('content')


<section class="content-header no-print">
    <h2>Salary</h2>
    <a href="{{url('/salary/create')}}" class="btn btn-success">Add New</a>
</section>



<section class="content no-print">
      <table  class="table table-bordered table-striped ajax_view">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>salary</th>
                    <th>addon</th>
                    <th>minus</th>
                    <th>process_date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($objDatas as $objData)
                    <tr>
                        <td>{{ $objData->id }}</td>
                        <td>{{ $objData->User->first_name . ' '. $objData->User->last_name }}</td>
                        <td>{{ $objData->salary . ' '. $objData->ended_at }}</td>
                        <td>{{ $objData->addon }}</td>
                        <td>{{ $objData->minus }}</td>
                        <td>{{ $objData->process_date }}</td>
                        <td><a href="{{ url('/salary') }}/{{$objData->id}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
      </table>
      {{ $objDatas->links() }}
</section>
@endsection