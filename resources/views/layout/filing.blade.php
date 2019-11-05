<section class="widget">
    <h3 class="title">归档 Filing</h3>
    <ul>
@foreach ($filing as $fs)
        <li>
            <a href="#" title="#">{{$fs->year}}年{{sprintf("%02d", $fs->month)}}月</a>
            <span>({{$fs->num}})</span>
        </li>
@endforeach
    </ul>
</section>