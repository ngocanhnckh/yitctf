@extends('layouts.all')
@section('content')
<div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Adding question</h4>
                                <p class="text-muted col-lg-6 font-14">Add question to your CTF. Number of level start from 0, question and hint are required </p>

                                <form class="" action="#" novalidate="">
                                    <div class="form-group">
                                        <label>Level Number</label>
                                        <div>
                                            <input data-parsley-type="number" type="text" class="form-control" required="" placeholder="Enter only numbers">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Question</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Hint</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Answer</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                Back
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        @endsection