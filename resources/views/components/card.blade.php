<div class="card {{$class}} {{$type}} {{$card}}" style="background-image: url('{{asset("images/".$card.".webp")}}');">
    <div class="topo">
        <div class="energy">{{$energy}}</div>
    </div>
    <div class="skill"></div>
    <div class="description">{!! $description !!}</div>
</div>
