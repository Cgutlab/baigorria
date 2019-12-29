<div class="carousel carousel-slider center" data-indicators="true">
    @foreach($sliders as $slider)
    <div class="carousel-item white-text">
        <img src="{{ asset('img/sliders/'.$slider->imagen) }}" alt="slider">
        <div class="box-cap">
            <div id="soloSlider" class="fc7 fs18 fw6">
                {!!$slider->{'titulo_'.$idioma} !!}
            </div>
            <div id="soloSlider" class="fc1 fs18 fw4">
                {!!$slider->{'subtitulo_'.$idioma} !!}
            </div>
        </div>
    </div>
    @endforeach
</div>
