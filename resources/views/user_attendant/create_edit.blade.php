@extends('layouts.app')
@section('title', __( 'lang_v1.all_sales'))

@section('content')


<section class="content-header no-print">
    <h2>No Attend
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
     <form action="{{ url('attendant') }}" method="POST">
    @else
        <form action="{{ url('attendant') }}/{{ @$objData->id }}" method="POST">
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
            <div class="col-2">Start date</div>
            <div class="col-8">
                <input type="date" name="started_at"  class="form-control" value="{{ @$objData->started_at }}">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-2">End date</div>
            <div class="col-8">
                <input type="date" name="ended_at"  class="form-control" value="{{ @$objData->ended_at }}">
            </div>
        </div>
        
        
        <div class="form-group" class="form-control">
            <div class="col-2">Status</div>
            <div class="col-8">
                <select name="status"  class="form-control">
                    <option value="no-rule"
                    @if(@$objData->status == "no-rule")
                        selected
                    @endif
                    >no-rule</option>

                    <option value="rule"
                    @if(@$objData->status == "rule")
                        selected
                    @endif
                    >rule</option>
                </select>
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