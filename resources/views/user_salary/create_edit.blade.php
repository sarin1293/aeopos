@extends('layouts.app')
@section('title', __( 'lang_v1.all_sales'))

@section('content')


<section class="content-header no-print">
    <h2>Salary
        -
        @if(@$objData)
            Edit {{@$objData->id}}
        @else
            Create
        @endif
    </h2>
</section>



<section class="content no-print">
    
    @if(!@$objData)
        <form action="{{url('salary')}}" method="POST">
    @else
        <form action="{{ url('salary') }}/{{ @$objData->id }}" method="POST">
    @endif
        
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        @if(@$objData)
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="id" value="{{ @$objData->id }}">
        @else
            <input type="hidden" name="_method" value="post">
        @endif
        
        <div class="form-group">
            <div class="col-2">Name</div>
            <div class="col-8">
                <select name="user_id" class="form-control">
                    @foreach($objUsers as $objUser)
                        <option value="{{ $objUser->id }}"  
                            @if(@$objData->user_id == $objUser->id)
                             selected
                            @endif
                            >{{ $objUser->first_name . ' '. $objUser->lastname }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-2">Salary</div>
            <div class="col-8">
                <input type="number" name="started_at"  class="form-control" value="{{ @$objData->salary }}">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-2">Add on</div>
            <div class="col-8">
                <input type="number" name="add_on"  class="form-control" value="{{  @$objData->add_on }}">
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-2">Minus</div>
            <div class="col-8">
                <input type="number" name="minus"  class="form-control" value="{{  @$objData->minus }}">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-2">Process Date</div>
            <div class="col-8">
                <input type="date" name="process_date"  class="form-control" value="{{ @$objData->process_date }}">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-12">
                <input type="submit" value="Save" >
            </div>
        </div>
    </form>
    
</section>
@endsection