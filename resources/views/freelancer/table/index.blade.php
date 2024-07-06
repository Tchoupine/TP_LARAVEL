@extends('freelancer.table.layouts.app')

@section('content')
    @if(isset($freelancers) && $freelancers->count() > 0)
    <div class="col-md-12 col-lg-8 col-xl-9">
        <div class="sort-tab develop-list-select">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="freelance-view">
                            <h4>Found {{ $freelancers->count() }} Results</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <a href="{{ route('freelancer.create') }}" class="btn-cart">+ Add Freelancer</a>
                </div>
            </div>
        </div>
        <div class="list-book-mark book-mark favour-book">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @foreach($freelancers as $freelancer)
                    <div class="card list-develop-group">
                        <div class="about-author d-flex align-items-center">
                            <div class="about-list-author d-flex align-items-center">
                                <div class="about-author-img">
                                    <div class="author-img-wrap">
                                        <a href="{{ route('details', $freelancer->id) }}">
                                            <img class="img-fluid" alt="Img" src="assets/img/img-{{ $loop->index % 5 + 1 }}.jpg">
                                            <span class="verified"><i class="fas fa-check-circle"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="author-details d-flex">
                                    <div class="freelance-info">
                                        <h3><a href="{{ route('details', $freelancer->id) }}">{{ $freelancer->name }}</a></h3>
                                        <div class="freelance-specific">{{ $freelancer->specialization }}</div>
                                        <div class="freelance-location"><i class="feather-map-pin me-1"></i>{{ $freelancer->location }}</div>
                                    </div>
                                    <div class="freelance-rating">
                                        <div class="rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $freelancer->rating)
                                                    <i class="fas fa-star filled"></i>
                                                @else
                                                    <i class="fas fa-star"></i>
                                                @endif
                                            @endfor
                                            <span class="average-rating">{{ $freelancer->rating }} ({{ $freelancer->reviews }})</span>
                                        </div>
                                        <div class="freelance-tags border-0">
                                            @foreach ($freelancer->skills as $skill)
                                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">{{ $skill }}</span></a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="freelance-price">
                                        <div class="freelance-price-img">
                                            <img src="assets/img/icon/price.png" alt="img">
                                        </div>
                                        <div class="freelance-price-content">
                                            <h6>Price</h6>
                                            <h5>${{ $freelancer->hourly_rate }} Hourly</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="develop-list-pro">
                                <div class="cart-hover">
                                    <a href="{{ route('details', $freelancer->id) }}" class="btn-invite d-block w-100 mb-2" tabindex="-1">View Profile</a>
                                    <a href="{{ route('freelancer.edit', $freelancer->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('freelancer.destroy', $freelancer->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-12">
                    <ul class="paginations list-pagination">
                        <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a></li>
                        <li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
                        <li class="page-item"><a href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a href="javascript:void(0);">...</a></li>
                        <li class="page-item"><a href="javascript:void(0);">10</a></li>
                        <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @else
        <p>No freelancers found.</p>
        @endif
    </div>
@endsection

@section('js')
    <script src="assets/js/jquery-3.7.1.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/js/profile-settings.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="assets/js/script.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="151145e2f361d169085d3c88-|49" defer></script>
@endsection