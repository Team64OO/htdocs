@extends('layout')

@section('body')
    <main>
        <div class="sidebar">Online Code Editor</div>
        <div class="main">
            <form>
                <textarea class="editor" placeholder="// code here"></textarea>
                <input type="submit" class="run" value="Run"></input>
            </form>
            <div class="console"># output console<br></div>
        </div>
    </main>
@endsection
