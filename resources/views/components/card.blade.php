<div class="card {{$class}} {{$type}} {{$card}} @isset($efect){{$efect}}@endisset" style="background-image: url('{{asset("images/".$card.".webp")}}');">
    <div class="topo">
        <div class="energy">{{$energy}}</div>
    </div>
    <div class="skill"></div>
    <div class="description">{!! $description !!}</div>
</div>
