@extends('layouts.all');
@section('content')
<div class="col-lg-6">
                        <div class="card col-lg-12">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Manage Question</h4>
                                <p class="text-muted m-b-30 font-14">Add <code>question</code> or change them
                                </p>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>What is YIT's most chicken</td>
                                        <td><a href="edit/1">Edit question</a></td>
                                        
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>
                                <a href="add">Add Question</a>

                            </div>
                        </div>
                    </div>
@endsection