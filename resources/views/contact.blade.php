@extends('layouts.app')

        @section('sidebar')
            @parent
            <p>THis is appended to the sidebar</p>
        @endsection

        @section('content')
            <div class="content">
                <div class="title m-b-md">
                    <h1>Welcome to the contact page</h1>
                </div>
            </div>
        @endsection



        