<div class="card card-body card_sidebar_one">
    <h3 class="text-center">{{ __('sections.reserve') }}</h3>
    <hr>
    <form action="{{ url('bookNowForm') }}" method="POST">
        @csrf
      <div class="mt-3">
        <input type="text" name="name" id="" placeholder="{{ __('sections.name') }}" class="form-control">
      </div>
      <div class="mt-3">
        <input type="email" name="email" id="" placeholder="{{ __('sections.email') }}" class="form-control">
      </div>
      <div class="mt-3">
        <input type="tel" name="phone" id="" placeholder="{{ __('sections.phone') }}" class="form-control">
      </div>
      <div class="mt-3">
        <select name="services" class="form-control" id="">
        <option value="">{{ __('sections.select services') }}</option>
        @if(isset($categories))
            @foreach ($categories as $category)
                <option value="{{ $category->name }}">
                    {{ $category->name }}
                </option>
            @endforeach
        @endif
        </select>
      </div>
      <div class="mt-3">
      <select name="location" class="form-control" id="">
          <option value="">{{ __('sections.select location') }}</option>
          <option value="Nasr city Branch">{{ __('about.branch 1') }}</option>
          <option value="Heliopolis Branch">{{ __('about.branch 2') }}</option>
      </select>
      </div>

      <div class="mt-3">
        <textarea name="message" id="" cols="30" rows="5" placeholder="{{ __('sections.message') }}" class="form-control"></textarea>
      </div>
      <div class="mt-5">
        <button type="submit" class="btn btn-dark">{{ __('sections.reserve') }}</button>
      </div>
    </form>
  </div>
