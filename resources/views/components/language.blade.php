<div   action="{{route('set_language_locale' , $lang)}}"  method="POST">
    @csrf
    <button type="submit" class="btn language">
        <img src="{{ asset('vendor/blade-flags/language-' .$lang . '.svg')}}" alt="" >
    </button>
</div>