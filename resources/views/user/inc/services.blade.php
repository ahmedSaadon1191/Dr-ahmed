
    <h2 class="text-center mt-2 mb-4"></h2>
    <div class="section-title">
      <h2>Our Services</h2>
      <p>
        Our centers offer all dental services with the premium guality and the best price
      </p>
    </div>
    <div class="row">
        @if (isset($categories) && $categories->count() > 0)
            @foreach ($categories as $service)
                <div class="col-md-6 col-lg-4 mb-4" data-bs-toggle="modal" data-bs-target="#serv-id{{ $service->id }}" id="{{ $service->id }}">
                    {{-- <div class="myServe shadow">
                        <div class="servOver"></div>
                        <div class="boxServiceImg" style="background-image: url('assets/admin/images/{{ $service->photo }}');">
                        </div>
                    </div> --}}
                    <img src="assets/admin/images/{{ $service->photo }}" alt="" class="img-fluid imgServ">
                </div>
                <!-- Modal -->

                <div class="modal fade" id="serv-id{{ $service->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body  model_scroll">
                            @if (isset($service->posts) && $service->posts->count() > 0)
                                @foreach ($service->posts as $post)
                                {{-- <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset('assets/admin/images/services_category/tXgMhFkJDZRvNoFqDYAAVOBa8BAzQ1C9bJs99Yr0.JPG') }}" class="testimonial-img" alt="" style="height: 200px; width: 200px">
                                    </div>
                                </div> --}}
                                <h3 class="mt-4 text-center mb-5" >{{ $post->title }}</h3>
                                {{-- {{ $post->images_post }} --}}
                                @if (isset($post->images_post))
                                    @foreach ($post->images_post as $img)
                                        <img src="{{ asset('assets/admin/images/' . $img->photo) }}" class="testimonial-img" alt="" style="height: auto; width: 100%; margin-bottom: 15px ">
                                    @endforeach
                                @endif


                                    <p class="lead mt-4">
                                    {!! $post->body !!}
                                    </p>

                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="100%" height="300px" class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{ $post->url }}" allowfullscreen></iframe>
                                    </div>
                                    <h6>{{ $post->created_at }}</h6>
                                    <hr class="mb-3">
                                @endforeach
                            @else
                            <h2 class="text-center">
                                لا يوجد مقالات
                            </h2>
                            <hr class="mb-3">
                            @endif

                        <br>

                        <h3>reserve</h3>

                        <form action="">
                            <div class="mt-3">
                            <input type="text" name="" id="" placeholder="Name" class="form-control">
                            </div>
                            <div class="mt-3">
                            <input type="email" name="" id="" placeholder="email" class="form-control">
                            </div>
                            <div class="mt-3">
                            <input type="tel" name="" id="" placeholder="Phone" class="form-control">
                            </div>
                            <div class="mt-3">
                            <select name="" class="form-control" id="">
                                <option value="">Services</option>
                            </select>
                            </div>
                            <div class="mt-3">
                            <select name="" class="form-control" id="">
                                <option value="">location</option>
                            </select>
                            </div>

                            <div class="mt-3">
                            <textarea name="message" id="" cols="30" rows="5" placeholder="Message"
                                class="form-control"></textarea>
                            </div>
                            <div class="mt-5">
                            <button class="btn btn-dark">Reserve Now</button>
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer m-auto">
                        <a href="tel:+201004911155" target="_blank" class="pl-1 pr-1"><i class="bx bxs-phone shadow fs-2 rounded-pill p-2"></i></a>
                        <a href="#" class="pl-1 pr-1"><i class="bx bxl-facebook shadow fs-2 rounded-pill p-2"></i></a>
                        <a href="#" class="pl-1 pr-1"><i class="bx bxl-whatsapp shadow fs-2 rounded-pill p-2"></i></a>
                        <a href="#" class="pl-1 pr-1"><i class="bx bxl-messenger shadow fs-2 rounded-pill p-2"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>


