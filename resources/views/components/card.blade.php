    <div class="card {{ $class }} {{ $type }} {{ $card }}
        @isset($efect) {{ $efect }} @endisset
        @isset($atack) atack @endisset
        @isset($defense) defense @endisset
        @isset($heal) heal @endisset
        @isset($none) power-none @endisset
        energy-{{$energy}}" style="background-image: url('{{ asset('images/' . $card . '.webp') }}');">
        <div class="topo">
            <div class="energy">
                <p>{{ $energy }}</p>
            </div>
            @isset($atack)
            <div class="atack">{{ $atack }}</div>
            @endisset
            @isset($defense)
            <div class="defense">{{ $defense }}</div>
            @endisset
            @isset($heal)
            <div class="heal">{{ $heal }}</div>
            @endisset
        </div>
        <div class="img"></div>
        <div class="skill"></div>
        <div class="description">{!! $description !!}</div>
    </div>
