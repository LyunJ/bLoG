@php
    $user = Auth::user();
    $user_id = Auth::id();

    $portfolios = $user->portfolios;

    
@endphp

<div class="profile-form-block">
    <form id="profile-submit" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="introduction-block">
            <div class="form-group name">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group subtitle">
                <label for="subtitle">Subtitle:</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle">
            </div>
            <div class="form-group introduction">
                <label for="introduction">Introduction:</label>
                <input type="text" class="form-control" id="introduction" name="introduction">
            </div>
            <div class="form-group user-language-search">
                <div class="language-search-box">
                    <input onkeyup="filter()" type="text" id="user-language-search" placeholder="Type to Search">
                </div>
                <div class="user-language-search-list" style="display:none;">
                    <select name="language-searched-list" id="language-searched-list">

                    </select>
                </div>
            </div>
        </div>
        <hr>
        <hr>
        <div class="portfolios-block">
            @foreach($portfolios as $portfolio)
                <div class="portfolio-block">
                    <div class="form-group portfolio-name">
                        <label for="portfolio-name">Portfolio Name:</label>
                        <input type="text" class="form-control" name="portfolio_name" value="{{ $portfolio->name }}">
                    </div>
                    @foreach($portfolio->portfolioImages as $portfolioImage)
                        <div class="portfolio-image-block">
                            <p class="portfolio-image-num">Image {{ $loop->index + 1 }}</p>
                            <div class="form-group portfolio-image">
                                <label for="portfolio-image">Portfolio Image:</label>
                                <input class="portfolio-image-input" name="portfolio_image" type="file" accept="image/*" onchange="blogJs.setPortfolioImage(event,{{ $loop->index }});"/>
                                <div class="portfolio-image-container">
                                    <img id="portfolio-image-{{ $loop->index }}" src="{{ asset('storage/'.($portfolioImage->url)) }}" style="width:100px;height:auto;" />
                                </div>
                            </div>
                            <div class="form-group portfolio-image-detail">
                                <label for="portfolio-image-detail">Portfolio Detail:</label>
                                <input type="text" class="form-control" name="portfolio_detail" value="{{ $portfolioImage->detail }}">
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
            @endforeach
            <div class="add-portfolio-button">
                <button class="add-portfolio">Add Pofrfolio</button>
            </div>
        </div>

        <div class="update-portfolio-form-button">
            <button class="update-portfolio">Update</button>
        </div>
    </form>
</div>