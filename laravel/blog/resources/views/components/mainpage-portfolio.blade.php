<div class="portfolio-block">
    <div class="title-block">
        <h1>Portfolio</h1>
    </div>
    @foreach(Auth::user()->portfolios as $portfolio)
        @foreach($portfolio->portfolioImages as $image)
            <div class="portfolio-content-block">
                <div class="portfolio-content-explanation">
                    <div class="portfolio-content-explanation-inner-box">
                        <div class="portfolio-content-name">
                            <h1>{{ $portfolio->name }}</h1>
                        </div>
                        <div class="portfolio-content-detail">
                            <p>{{ $image->detail }}</p>
                        </div>    
                    </div>
                </div>
                <div class="portfolio-content-images">
                    <div class="portfolio-content-images-inner-box">                    
                        <div class="portfolio-image-slides">
                            <img src="{{ asset('storage/'.($image->url)) }}" style="width:100%;height:auto;" />
                        </div>
                        <div style="text-align:center">
                            @for($i = 0 ; $i < $portfolio->portfolioImages()->count() ; $i++)
                                <span class="dot" onclick="currentSlide($i)"></span>
                            @endfor
                        </div>
                    </div>
                </div>
                <a class="prev" >&#10094;</a>
                <a class="next" >&#10095;</a>
            </div>
        @endforeach
    @endforeach
</div>
