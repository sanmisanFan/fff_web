@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        哦呼，上传的时候出现了一些问题(´・ω・`)<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif