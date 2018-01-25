@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Donor Dashboard</div>

                <div class="panel-body">
                    
                    <!-- <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <td> {{ $donor[0]->name }} </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> {{ $donor[0]->email }} </td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td> {{ $donor[0]->mobile }} </td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <td> {{ $donor[0]->blood_group }} </td>
                        </tr>
                    </table> -->

                    <form class="form-horizontal" method="POST" action="{{ route('donor_availability') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="available" class="col-md-4 control-label">Are you available for Blood Donation</label>

                            <div class="col-md-6">
                                <select class="form-control" name="available" id="available">
                                <option value="0">Not Available</option>
                                <option value="1">Available</option>
                                </select>
                            </div>
                        </div>                                                

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
