@extends('layuot.base')

@section('content')
<div class="container">
        <div class="m-5">
            <h1 class="title mb-5">My cards</h1>
            <div class="row gap-4">
                <div class="card-task">
                    <div class="plus-background"></div>
                    <div class="card-task-header d-flex">
                        <h3 class="add-card-task-header">Title</h3>
                    </div>
                    <div class="card-task-content">
                        <p class="add-card-task-content">Description</p>
                    </div>
                </div>
                <div class="card-task">
                    <div class="card-task-header d-flex">
                        <h3>Card name</h3>
                        <div>
                            <input type="checkbox" class="custom-checkbox" id="task-1" name="task-1" value="0">
                            <label for="task-1"><span class="task-check"></span></label>
                        </div>
                    </div>
                    <div class="card-task-content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card-task">
                    <div class="card-task-header d-flex">
                        <h3>Card name</h3>
                        <div>
                            <input type="checkbox" class="custom-checkbox" id="task-2" name="task-2" value="1" checked>
                            <label for="task-2"><span class="task-check"></span></label>
                        </div>
                    </div>
                    <div class="card-task-content">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection