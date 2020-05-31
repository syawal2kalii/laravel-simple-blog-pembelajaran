<ul>
    @foreach($users as $user)
        <li><a href="{{route('list-users',$user)}}">{{$user->name}}</a></li>
    @endforeach
</ul>
