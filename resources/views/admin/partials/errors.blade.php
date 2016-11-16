@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong>
        用户名或密码错误喔(´・ω・`)<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif