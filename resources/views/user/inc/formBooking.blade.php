<!-- ======= Appointment Section ======= -->

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ __('navbar.Reserve') }}</h2>

        </div>

        <form action="{{ url('bookNowForm') }}" method="POST" role="form"    data-aos="fade-up"
            data-aos-delay="100">
            @csrf

            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('sections.name') }}" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('sections.email') }}" required>
                </div>
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="{{ __('sections.phone') }}" required>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 form-group mt-3">
                    <select name="services" id="department" class="form-select">
                        <option value="">{{ __('sections.select services') }}</option>
                        @if (isset($categories))
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                    </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                    <select name="location" id="doctor" class="form-select">
                        <option value="">{{ __('sections.select location') }}</option>
                        <option value="Nasr city Branch">{{ __('about.branch 1') }}</option>
                        <option value="Heliopolis Branch">{{ __('about.branch 2') }}</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="{{ __('sections.message') }} (Optional)"></textarea>
            </div>

            <div class="text-center"><button class="btn btn-primary mt-3" type="submit">{{ __('sections.send message') }}</button></div>
        </form>

    </div>
