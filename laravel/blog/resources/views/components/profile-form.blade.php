@php
    $user = Auth::user();
    $user_id = Auth::id();

    $portfolios = $user->portfolios;

@endphp

<div class="profile-form-block">
    <form>
        @csrf
        <div class="introduction-block">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="subtitle">Subtitle:</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle">
            </div>
            <div class="form-group">
                <label for="introduction">Introduction:</label>
                <input type="text" class="form-control" id="introduction" name="introduction">
            </div>
            <div class="form-group">
                <div class="user-language-search">
                    <input onkeyup="filter()" type="text" id="user-language-search" placeholder="Type to Search">
                </div>
                <div class="user-language-search-list" style="display:none;">
                    <select name="language-searched-list" id="language-searched-list">

                    </select>
                </div>
            </div>
        </div>
        <div class="portfolios-block">
            @foreach($portfolios as $portfolio)
                <div class="portfolio-block">
                    <div class="form-group">
                        <label for="portfolio-name">Portfolio Name:</label>
                        <input type="text" class="form-control" name="portfolio_name" value="{{ $portfolio->name }}">
                    </div>
                    @foreach($portfolio->portfolioImages as $portfolioImage)
                        <div class="form-group">
                            <label for="portfolio-image">Portfolio Image:</label>
                            <input class="portfolio-image-input" type="file" accept="image/*" onchange="setPortfolioImage(event);"/>
                            <div class="portfolio-image-container">
                                <img src="{{ asset('storage/'.($portfolioImage->url)) }}" style="width:100px;height:auto;" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="portfolio-image-detail">Portfolio Detail:</label>
                            <input type="text" class="form-control" name="portfolio_detail" value="{{ $portfolioImage->detail }}">
                        </div>
                    @endforeach
                </div>
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