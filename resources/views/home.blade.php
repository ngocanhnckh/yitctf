@extends('layouts.all')

@section('content')
<div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                            @if($level===0)
                            <h1>You have completed the challenge</h1>
                            <form method='post' action='/reset'>
                                @csrf
                                <button type='submit' class='btn btn-danger'>Reset the game</button>
                            </form>
                            @else
                            <form method='post' action='{{route("submit")}}'>
                                @csrf
                                <h4 class="mt-0 header-title">Round {{$level}}</h4>
                                <p class="text-muted m-b-30 font-14">Question: {{$level_question}}</p>
                                <p class="text-muted m-b-30 font-14">Hint: {{$level_hint}}</p>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Answer</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="answer" value="" placeholder="Your Answer" id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <p style='color:red'>
                                                @if (\Session::has('msg'))
                                                {!! \Session::get('msg') !!}
                                                @endif
                                            </p>
                                        </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </div> <!-- end col -->
                </div>
@endsection
