@extends('layouts.main.app')

@section('content')

<div class="card text-dark bg-light mb-3">
    <div class="card-header">Regitser OSL To Be Sent</div>
    <div class="card-body text-secondary">
        <form>
            <div class="row mb-3">
                <label for="pinCode" class="col-sm-2 col-form-label">PIN Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="pinCode" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="oslCode" class="col-sm-2 col-form-label">OSL Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="oslCode" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sendOutDate" class="col-sm-2 col-form-label">Send Out Date</label>
                <div class="col-auto">
                    <input type="date" class="form-control" id="sendOutDate" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="count" class="col-sm-2 col-form-label">Count</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="count" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Search</button>                   
                </div>
            </div>
        </form>
    </div>
</div>


@endsection