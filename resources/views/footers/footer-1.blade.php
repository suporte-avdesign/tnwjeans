<footer class="footer text-center">
    <!-- Container Starts -->
    <div class="container">
        <p>{{$content->title}}</p>

        <p>
            {{$content->copyright}}
            <a href="javascript:void(0);"><img src="{{asset('img/av-design.png')}}" width="50px"></a>
        </p>
        @if(!empty($socials))
            <div class="social-icons">
                <ul class="social">
                    @foreach($socials as $social)
                        @if($social->active == 1)
                            <li>
                                <a href="javascript:void(0);" class="{{$social->name}}" onclick="socialFollow('{{$social->id}}');" title="{{$social->name}}"></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</footer>
