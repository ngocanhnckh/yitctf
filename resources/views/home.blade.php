@extends('layouts.all')

@section('content')
<div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Round 1</h4>
                                <p class="text-muted m-b-30 font-14">Question and Hint: </p>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Your Answer" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            
                                        </div>
                                </div>
                        </div>
                    </div> <!-- end col -->
                </div>
@endsection
