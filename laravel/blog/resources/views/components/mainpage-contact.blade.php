<div class="contact-block">
    <div class="title-block">
        <h1>Contact</h1>
    </div>
    @foreach(Auth::user()->contacts as $contact)
    <div class="contact-content-block">
        <div class="contact-content-inner-block">
            <div class="contact-name">
                <p>{{ $contact->name }}</p>
            </div>
            <div class="contact-content">
                <p>{{ $contact->content }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>