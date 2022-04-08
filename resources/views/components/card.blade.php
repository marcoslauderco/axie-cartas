    <div
        class="cardshow {{ $class }} {{ $type }} {{ $card }}
        @if ($efect) {{ str_replace(',', ' ', $efect) }} @endif
        @if ($atack > 0) atack @endif
        @if ($defense > 0) defense @endif
        @if ($heal > 0) heal @endif
        @if ($atack == 0 && $defense == 0 && $heal == 0) power-none @endif
        energy-{{ $energy }}">
        <div class="topo">
            <div class="energy">
                <p>{{ $energy }}</p>
            </div>
            @if ($atack > 0)
                <div class="atack">{{ $atack }}</div>
            @endif
            @if ($defense > 0)
                <div class="defense">{{ $defense }}</div>
            @endif
            @if ($heal > 0)
                <div class="heal">{{ $heal }}</div>
            @endif
        </div>
        <div class="img" style="background-image: url('{{ asset('images/' . $img) }}');"></div>
        <div class="info">
            <div class="name">{{ $name }}</div>
            <div class="efect">
                @foreach (explode(',', $efect) as $ef)
                    <span class="{{ $ef }}">{{ $ef }}</span>
                @endforeach
            </div>
        </div>
        <div class="description">
            @isset($traducao[strtolower($description)])
                {!! $traducao[strtolower($description)] !!}@else{!! $description !!}
            @endisset
        </div>
    </div>
