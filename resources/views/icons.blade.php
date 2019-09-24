@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/select2/css/select2.min.css') }}" />
@endpush

@section('header')
    <h2 class="page-head-title">Icons</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active">Icons</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="be-icons-list">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <form action="#">
                            <div class="form-group row justify-content-between p-4">
                                <div class="col-12 col-sm-5 col-lg-3 mb-2 mb-sm-0">
                                    <select class="select2" id="icon-category">
                                        <option value="all">All Icons</option>
                                        <option value="new-icons">New Icons</option>
                                        <option value="web-application">Web Application</option>
                                        <option value="notifications">Notifications</option>
                                        <option value="person">Person</option>
                                        <option value="file">File</option>
                                        <option value="editor">Editor</option>
                                        <option value="comment">Comment</option>
                                        <option value="form">Form</option>
                                        <option value="hardware">Hardware</option>
                                        <option value="directional">Directional</option>
                                        <option value="map">Map</option>
                                        <option value="view">View</option>
                                        <option value="date-time">Date/time</option>
                                        <option value="social">Social</option>
                                        <option value="image">Image</option>
                                        <option value="audio-video">Audio/video</option>
                                        <option value="numbers">Numbers</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-5 col-lg-4 float-right">
                                    <div class="input-group input-search">
                                        <input class="form-control" type="text" placeholder="Search"><span class="input-group-btn">
                                            <button class="btn btn-secondary"><i class="icon zmdi zmdi-search"></i></button></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="new-icons">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">New Icons<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-group"></span></div><span class="icon-class">zmdi-group</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rss"></span></div><span class="icon-class">zmdi-rss</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shape"></span></div><span class="icon-class">zmdi-shape</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-spinner"></span></div><span class="icon-class">zmdi-spinner</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-ungroup"></span></div><span class="icon-class">zmdi-ungroup</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-500px"></span></div><span class="icon-class">zmdi-500px</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-8tracks"></span></div><span class="icon-class">zmdi-8tracks</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-amazon"></span></div><span class="icon-class">zmdi-amazon</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blogger"></span></div><span class="icon-class">zmdi-blogger</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-delicious"></span></div><span class="icon-class">zmdi-delicious</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-disqus"></span></div><span class="icon-class">zmdi-disqus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flattr"></span></div><span class="icon-class">zmdi-flattr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flickr"></span></div><span class="icon-class">zmdi-flickr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-github-alt"></span></div><span class="icon-class">zmdi-github-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-old"></span></div><span class="icon-class">zmdi-google-old</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-linkedin"></span></div><span class="icon-class">zmdi-linkedin</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-odnoklassniki"></span></div><span class="icon-class">zmdi-odnoklassniki</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-outlook"></span></div><span class="icon-class">zmdi-outlook</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-paypal-alt"></span></div><span class="icon-class">zmdi-paypal-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pinterest"></span></div><span class="icon-class">zmdi-pinterest</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-playstation"></span></div><span class="icon-class">zmdi-playstation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-reddit"></span></div><span class="icon-class">zmdi-reddit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-skype"></span></div><span class="icon-class">zmdi-skype</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-slideshare"></span></div><span class="icon-class">zmdi-slideshare</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-soundcloud"></span></div><span class="icon-class">zmdi-soundcloud</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tumblr"></span></div><span class="icon-class">zmdi-tumblr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-twitch"></span></div><span class="icon-class">zmdi-twitch</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-vimeo"></span></div><span class="icon-class">zmdi-vimeo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-whatsapp"></span></div><span class="icon-class">zmdi-whatsapp</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-xbox"></span></div><span class="icon-class">zmdi-xbox</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-yahoo"></span></div><span class="icon-class">zmdi-yahoo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-youtube-play"></span></div><span class="icon-class">zmdi-youtube-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-youtube"></span></div><span class="icon-class">zmdi-youtube</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="web-application">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Web Application<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-3d-rotation"></span></div><span class="icon-class">zmdi-3d-rotation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airplane-off"></span></div><span class="icon-class">zmdi-airplane-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airplane"></span></div><span class="icon-class">zmdi-airplane</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-album"></span></div><span class="icon-class">zmdi-album</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-archive"></span></div><span class="icon-class">zmdi-archive</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-account"></span></div><span class="icon-class">zmdi-assignment-account</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-alert"></span></div><span class="icon-class">zmdi-assignment-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-check"></span></div><span class="icon-class">zmdi-assignment-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-o"></span></div><span class="icon-class">zmdi-assignment-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-return"></span></div><span class="icon-class">zmdi-assignment-return</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment-returned"></span></div><span class="icon-class">zmdi-assignment-returned</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-assignment"></span></div><span class="icon-class">zmdi-assignment</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-attachment-alt"></span></div><span class="icon-class">zmdi-attachment-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-attachment"></span></div><span class="icon-class">zmdi-attachment</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-audio"></span></div><span class="icon-class">zmdi-audio</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-badge-check"></span></div><span class="icon-class">zmdi-badge-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-balance-wallet"></span></div><span class="icon-class">zmdi-balance-wallet</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-balance"></span></div><span class="icon-class">zmdi-balance</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-battery-alert"></span></div><span class="icon-class">zmdi-battery-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-battery-flash"></span></div><span class="icon-class">zmdi-battery-flash</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-battery-unknown"></span></div><span class="icon-class">zmdi-battery-unknown</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-battery"></span></div><span class="icon-class">zmdi-battery</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bike"></span></div><span class="icon-class">zmdi-bike</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-block-alt"></span></div><span class="icon-class">zmdi-block-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-block"></span></div><span class="icon-class">zmdi-block</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-boat"></span></div><span class="icon-class">zmdi-boat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-book-image"></span></div><span class="icon-class">zmdi-book-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-book"></span></div><span class="icon-class">zmdi-book</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bookmark-outline"></span></div><span class="icon-class">zmdi-bookmark-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bookmark"></span></div><span class="icon-class">zmdi-bookmark</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brush"></span></div><span class="icon-class">zmdi-brush</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bug"></span></div><span class="icon-class">zmdi-bug</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bus"></span></div><span class="icon-class">zmdi-bus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cake"></span></div><span class="icon-class">zmdi-cake</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-car-taxi"></span></div><span class="icon-class">zmdi-car-taxi</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-car-wash"></span></div><span class="icon-class">zmdi-car-wash</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-car"></span></div><span class="icon-class">zmdi-car</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-giftcard"></span></div><span class="icon-class">zmdi-card-giftcard</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-membership"></span></div><span class="icon-class">zmdi-card-membership</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-travel"></span></div><span class="icon-class">zmdi-card-travel</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card"></span></div><span class="icon-class">zmdi-card</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-case-check"></span></div><span class="icon-class">zmdi-case-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-case-download"></span></div><span class="icon-class">zmdi-case-download</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-case-play"></span></div><span class="icon-class">zmdi-case-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-case"></span></div><span class="icon-class">zmdi-case</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cast-connected"></span></div><span class="icon-class">zmdi-cast-connected</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cast"></span></div><span class="icon-class">zmdi-cast</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chart-donut"></span></div><span class="icon-class">zmdi-chart-donut</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chart"></span></div><span class="icon-class">zmdi-chart</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-city-alt"></span></div><span class="icon-class">zmdi-city-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-city"></span></div><span class="icon-class">zmdi-city</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-close-circle-o"></span></div><span class="icon-class">zmdi-close-circle-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-close-circle"></span></div><span class="icon-class">zmdi-close-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-close"></span></div><span class="icon-class">zmdi-close</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cocktail"></span></div><span class="icon-class">zmdi-cocktail</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-code-setting"></span></div><span class="icon-class">zmdi-code-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-code-smartphone"></span></div><span class="icon-class">zmdi-code-smartphone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-code"></span></div><span class="icon-class">zmdi-code</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-coffee"></span></div><span class="icon-class">zmdi-coffee</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-bookmark"></span></div><span class="icon-class">zmdi-collection-bookmark</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-case-play"></span></div><span class="icon-class">zmdi-collection-case-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-folder-image"></span></div><span class="icon-class">zmdi-collection-folder-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-image-o"></span></div><span class="icon-class">zmdi-collection-image-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-image"></span></div><span class="icon-class">zmdi-collection-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-1"></span></div><span class="icon-class">zmdi-collection-item-1</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-2"></span></div><span class="icon-class">zmdi-collection-item-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-3"></span></div><span class="icon-class">zmdi-collection-item-3</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-4"></span></div><span class="icon-class">zmdi-collection-item-4</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-5"></span></div><span class="icon-class">zmdi-collection-item-5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-6"></span></div><span class="icon-class">zmdi-collection-item-6</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-7"></span></div><span class="icon-class">zmdi-collection-item-7</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-8"></span></div><span class="icon-class">zmdi-collection-item-8</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item-9"></span></div><span class="icon-class">zmdi-collection-item-9</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-item"></span></div><span class="icon-class">zmdi-collection-item</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-music"></span></div><span class="icon-class">zmdi-collection-music</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-pdf"></span></div><span class="icon-class">zmdi-collection-pdf</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-plus"></span></div><span class="icon-class">zmdi-collection-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-speaker"></span></div><span class="icon-class">zmdi-collection-speaker</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-text"></span></div><span class="icon-class">zmdi-collection-text</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-collection-video"></span></div><span class="icon-class">zmdi-collection-video</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-compass"></span></div><span class="icon-class">zmdi-compass</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cutlery"></span></div><span class="icon-class">zmdi-cutlery</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-delete"></span></div><span class="icon-class">zmdi-delete</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dialpad"></span></div><span class="icon-class">zmdi-dialpad</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dns"></span></div><span class="icon-class">zmdi-dns</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-drink"></span></div><span class="icon-class">zmdi-drink</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-edit"></span></div><span class="icon-class">zmdi-edit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-email-open"></span></div><span class="icon-class">zmdi-email-open</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-email"></span></div><span class="icon-class">zmdi-email</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-eye-off"></span></div><span class="icon-class">zmdi-eye-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-eye"></span></div><span class="icon-class">zmdi-eye</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-eyedropper"></span></div><span class="icon-class">zmdi-eyedropper</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-favorite-outline"></span></div><span class="icon-class">zmdi-favorite-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-favorite"></span></div><span class="icon-class">zmdi-favorite</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-filter-list"></span></div><span class="icon-class">zmdi-filter-list</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fire"></span></div><span class="icon-class">zmdi-fire</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flag"></span></div><span class="icon-class">zmdi-flag</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flare"></span></div><span class="icon-class">zmdi-flare</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flash-auto"></span></div><span class="icon-class">zmdi-flash-auto</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flash-off"></span></div><span class="icon-class">zmdi-flash-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flash"></span></div><span class="icon-class">zmdi-flash</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flip"></span></div><span class="icon-class">zmdi-flip</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flower-alt"></span></div><span class="icon-class">zmdi-flower-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flower"></span></div><span class="icon-class">zmdi-flower</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-font"></span></div><span class="icon-class">zmdi-font</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fullscreen-alt"></span></div><span class="icon-class">zmdi-fullscreen-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fullscreen-exit"></span></div><span class="icon-class">zmdi-fullscreen-exit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fullscreen"></span></div><span class="icon-class">zmdi-fullscreen</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-functions"></span></div><span class="icon-class">zmdi-functions</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gas-station"></span></div><span class="icon-class">zmdi-gas-station</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gesture"></span></div><span class="icon-class">zmdi-gesture</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-globe-alt"></span></div><span class="icon-class">zmdi-globe-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-globe-lock"></span></div><span class="icon-class">zmdi-globe-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-globe"></span></div><span class="icon-class">zmdi-globe</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-graduation-cap"></span></div><span class="icon-class">zmdi-graduation-cap</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-group"></span></div><span class="icon-class">zmdi-group</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-home"></span></div><span class="icon-class">zmdi-home</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hospital-alt"></span></div><span class="icon-class">zmdi-hospital-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hospital"></span></div><span class="icon-class">zmdi-hospital</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hotel"></span></div><span class="icon-class">zmdi-hotel</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hourglass-alt"></span></div><span class="icon-class">zmdi-hourglass-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hourglass-outline"></span></div><span class="icon-class">zmdi-hourglass-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hourglass"></span></div><span class="icon-class">zmdi-hourglass</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-http"></span></div><span class="icon-class">zmdi-http</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-image-alt"></span></div><span class="icon-class">zmdi-image-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-image-o"></span></div><span class="icon-class">zmdi-image-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-image"></span></div><span class="icon-class">zmdi-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-inbox"></span></div><span class="icon-class">zmdi-inbox</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-invert-colors-off"></span></div><span class="icon-class">zmdi-invert-colors-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-invert-colors"></span></div><span class="icon-class">zmdi-invert-colors</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-key"></span></div><span class="icon-class">zmdi-key</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-label-alt-outline"></span></div><span class="icon-class">zmdi-label-alt-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-label-alt"></span></div><span class="icon-class">zmdi-label-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-label-heart"></span></div><span class="icon-class">zmdi-label-heart</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-label"></span></div><span class="icon-class">zmdi-label</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-labels"></span></div><span class="icon-class">zmdi-labels</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-lamp"></span></div><span class="icon-class">zmdi-lamp</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-landscape"></span></div><span class="icon-class">zmdi-landscape</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-layers-off"></span></div><span class="icon-class">zmdi-layers-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-layers"></span></div><span class="icon-class">zmdi-layers</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-library"></span></div><span class="icon-class">zmdi-library</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-link"></span></div><span class="icon-class">zmdi-link</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-lock-open"></span></div><span class="icon-class">zmdi-lock-open</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-lock-outline"></span></div><span class="icon-class">zmdi-lock-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-lock"></span></div><span class="icon-class">zmdi-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mail-reply-all"></span></div><span class="icon-class">zmdi-mail-reply-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mail-reply"></span></div><span class="icon-class">zmdi-mail-reply</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mail-send"></span></div><span class="icon-class">zmdi-mail-send</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mall"></span></div><span class="icon-class">zmdi-mall</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-map"></span></div><span class="icon-class">zmdi-map</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-menu"></span></div><span class="icon-class">zmdi-menu</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-money-box"></span></div><span class="icon-class">zmdi-money-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-money-off"></span></div><span class="icon-class">zmdi-money-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-money"></span></div><span class="icon-class">zmdi-money</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-more-vert"></span></div><span class="icon-class">zmdi-more-vert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-more"></span></div><span class="icon-class">zmdi-more</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-movie-alt"></span></div><span class="icon-class">zmdi-movie-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-movie"></span></div><span class="icon-class">zmdi-movie</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-nature-people"></span></div><span class="icon-class">zmdi-nature-people</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-nature"></span></div><span class="icon-class">zmdi-nature</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-navigation"></span></div><span class="icon-class">zmdi-navigation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-open-in-browser"></span></div><span class="icon-class">zmdi-open-in-browser</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-open-in-new"></span></div><span class="icon-class">zmdi-open-in-new</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-palette"></span></div><span class="icon-class">zmdi-palette</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-parking"></span></div><span class="icon-class">zmdi-parking</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-account"></span></div><span class="icon-class">zmdi-pin-account</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-assistant"></span></div><span class="icon-class">zmdi-pin-assistant</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-drop"></span></div><span class="icon-class">zmdi-pin-drop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-help"></span></div><span class="icon-class">zmdi-pin-help</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-off"></span></div><span class="icon-class">zmdi-pin-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin"></span></div><span class="icon-class">zmdi-pin</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pizza"></span></div><span class="icon-class">zmdi-pizza</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plaster"></span></div><span class="icon-class">zmdi-plaster</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-power-setting"></span></div><span class="icon-class">zmdi-power-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-power"></span></div><span class="icon-class">zmdi-power</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-print"></span></div><span class="icon-class">zmdi-print</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-puzzle-piece"></span></div><span class="icon-class">zmdi-puzzle-piece</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-quote"></span></div><span class="icon-class">zmdi-quote</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-railway"></span></div><span class="icon-class">zmdi-railway</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-receipt"></span></div><span class="icon-class">zmdi-receipt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-refresh-alt"></span></div><span class="icon-class">zmdi-refresh-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-refresh-sync-alert"></span></div><span class="icon-class">zmdi-refresh-sync-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-refresh-sync-off"></span></div><span class="icon-class">zmdi-refresh-sync-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-refresh-sync"></span></div><span class="icon-class">zmdi-refresh-sync</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-refresh"></span></div><span class="icon-class">zmdi-refresh</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-roller"></span></div><span class="icon-class">zmdi-roller</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-ruler"></span></div><span class="icon-class">zmdi-ruler</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-scissors"></span></div><span class="icon-class">zmdi-scissors</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-screen-rotation-lock"></span></div><span class="icon-class">zmdi-screen-rotation-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-screen-rotation"></span></div><span class="icon-class">zmdi-screen-rotation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-search-for"></span></div><span class="icon-class">zmdi-search-for</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-search-in-file"></span></div><span class="icon-class">zmdi-search-in-file</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-search-in-page"></span></div><span class="icon-class">zmdi-search-in-page</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-search-replace"></span></div><span class="icon-class">zmdi-search-replace</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-search"></span></div><span class="icon-class">zmdi-search</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-seat"></span></div><span class="icon-class">zmdi-seat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-settings-square"></span></div><span class="icon-class">zmdi-settings-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-settings"></span></div><span class="icon-class">zmdi-settings</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shape"></span></div><span class="icon-class">zmdi-shape</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shield-check"></span></div><span class="icon-class">zmdi-shield-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shield-security"></span></div><span class="icon-class">zmdi-shield-security</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shopping-basket"></span></div><span class="icon-class">zmdi-shopping-basket</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shopping-cart-plus"></span></div><span class="icon-class">zmdi-shopping-cart-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shopping-cart"></span></div><span class="icon-class">zmdi-shopping-cart</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sign-in"></span></div><span class="icon-class">zmdi-sign-in</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sort-amount-asc"></span></div><span class="icon-class">zmdi-sort-amount-asc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sort-amount-desc"></span></div><span class="icon-class">zmdi-sort-amount-desc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sort-asc"></span></div><span class="icon-class">zmdi-sort-asc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sort-desc"></span></div><span class="icon-class">zmdi-sort-desc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-spellcheck"></span></div><span class="icon-class">zmdi-spellcheck</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-spinner"></span></div><span class="icon-class">zmdi-spinner</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-storage"></span></div><span class="icon-class">zmdi-storage</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-store-24"></span></div><span class="icon-class">zmdi-store-24</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-store"></span></div><span class="icon-class">zmdi-store</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-subway"></span></div><span class="icon-class">zmdi-subway</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sun"></span></div><span class="icon-class">zmdi-sun</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tab-unselected"></span></div><span class="icon-class">zmdi-tab-unselected</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tab"></span></div><span class="icon-class">zmdi-tab</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tag-close"></span></div><span class="icon-class">zmdi-tag-close</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tag-more"></span></div><span class="icon-class">zmdi-tag-more</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tag"></span></div><span class="icon-class">zmdi-tag</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-thumb-down"></span></div><span class="icon-class">zmdi-thumb-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-thumb-up-down"></span></div><span class="icon-class">zmdi-thumb-up-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-thumb-up"></span></div><span class="icon-class">zmdi-thumb-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-ticket-star"></span></div><span class="icon-class">zmdi-ticket-star</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-toll"></span></div><span class="icon-class">zmdi-toll</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-toys"></span></div><span class="icon-class">zmdi-toys</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-traffic"></span></div><span class="icon-class">zmdi-traffic</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-translate"></span></div><span class="icon-class">zmdi-translate</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-triangle-down"></span></div><span class="icon-class">zmdi-triangle-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-triangle-up"></span></div><span class="icon-class">zmdi-triangle-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-truck"></span></div><span class="icon-class">zmdi-truck</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-turning-sign"></span></div><span class="icon-class">zmdi-turning-sign</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-ungroup"></span></div><span class="icon-class">zmdi-ungroup</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wallpaper"></span></div><span class="icon-class">zmdi-wallpaper</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-washing-machine"></span></div><span class="icon-class">zmdi-washing-machine</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-window-maximize"></span></div><span class="icon-class">zmdi-window-maximize</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-window-minimize"></span></div><span class="icon-class">zmdi-window-minimize</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-window-restore"></span></div><span class="icon-class">zmdi-window-restore</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wrench"></span></div><span class="icon-class">zmdi-wrench</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-zoom-in"></span></div><span class="icon-class">zmdi-zoom-in</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-zoom-out"></span></div><span class="icon-class">zmdi-zoom-out</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="notifications">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Notifications<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alert-circle-o"></span></div><span class="icon-class">zmdi-alert-circle-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alert-circle"></span></div><span class="icon-class">zmdi-alert-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alert-octagon"></span></div><span class="icon-class">zmdi-alert-octagon</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alert-polygon"></span></div><span class="icon-class">zmdi-alert-polygon</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alert-triangle"></span></div><span class="icon-class">zmdi-alert-triangle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-help-outline"></span></div><span class="icon-class">zmdi-help-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-help"></span></div><span class="icon-class">zmdi-help</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-info-outline"></span></div><span class="icon-class">zmdi-info-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-info"></span></div><span class="icon-class">zmdi-info</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications-active"></span></div><span class="icon-class">zmdi-notifications-active</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications-add"></span></div><span class="icon-class">zmdi-notifications-add</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications-none"></span></div><span class="icon-class">zmdi-notifications-none</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications-off"></span></div><span class="icon-class">zmdi-notifications-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications-paused"></span></div><span class="icon-class">zmdi-notifications-paused</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-notifications"></span></div><span class="icon-class">zmdi-notifications</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="person">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Person<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-add"></span></div><span class="icon-class">zmdi-account-add</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-box-mail"></span></div><span class="icon-class">zmdi-account-box-mail</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-box-o"></span></div><span class="icon-class">zmdi-account-box-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-box-phone"></span></div><span class="icon-class">zmdi-account-box-phone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-box"></span></div><span class="icon-class">zmdi-account-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-calendar"></span></div><span class="icon-class">zmdi-account-calendar</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-circle"></span></div><span class="icon-class">zmdi-account-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account-o"></span></div><span class="icon-class">zmdi-account-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-account"></span></div><span class="icon-class">zmdi-account</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts-add"></span></div><span class="icon-class">zmdi-accounts-add</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts-alt"></span></div><span class="icon-class">zmdi-accounts-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts-list-alt"></span></div><span class="icon-class">zmdi-accounts-list-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts-list"></span></div><span class="icon-class">zmdi-accounts-list</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts-outline"></span></div><span class="icon-class">zmdi-accounts-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-accounts"></span></div><span class="icon-class">zmdi-accounts</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-face"></span></div><span class="icon-class">zmdi-face</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-female"></span></div><span class="icon-class">zmdi-female</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-male-alt"></span></div><span class="icon-class">zmdi-male-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-male-female"></span></div><span class="icon-class">zmdi-male-female</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-male"></span></div><span class="icon-class">zmdi-male</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mood-bad"></span></div><span class="icon-class">zmdi-mood-bad</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mood"></span></div><span class="icon-class">zmdi-mood</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-run"></span></div><span class="icon-class">zmdi-run</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-walk"></span></div><span class="icon-class">zmdi-walk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="file">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">File<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-box"></span></div><span class="icon-class">zmdi-cloud-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-circle"></span></div><span class="icon-class">zmdi-cloud-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-done"></span></div><span class="icon-class">zmdi-cloud-done</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-download"></span></div><span class="icon-class">zmdi-cloud-download</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-off"></span></div><span class="icon-class">zmdi-cloud-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-outline-alt"></span></div><span class="icon-class">zmdi-cloud-outline-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-outline"></span></div><span class="icon-class">zmdi-cloud-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud-upload"></span></div><span class="icon-class">zmdi-cloud-upload</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-cloud"></span></div><span class="icon-class">zmdi-cloud</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-download"></span></div><span class="icon-class">zmdi-download</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-file-plus"></span></div><span class="icon-class">zmdi-file-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-file-text"></span></div><span class="icon-class">zmdi-file-text</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-file"></span></div><span class="icon-class">zmdi-file</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-folder-outline"></span></div><span class="icon-class">zmdi-folder-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-folder-person"></span></div><span class="icon-class">zmdi-folder-person</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-folder-star-alt"></span></div><span class="icon-class">zmdi-folder-star-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-folder-star"></span></div><span class="icon-class">zmdi-folder-star</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-folder"></span></div><span class="icon-class">zmdi-folder</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gif"></span></div><span class="icon-class">zmdi-gif</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-upload"></span></div><span class="icon-class">zmdi-upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="editor">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Editor<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-all"></span></div><span class="icon-class">zmdi-border-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-bottom"></span></div><span class="icon-class">zmdi-border-bottom</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-clear"></span></div><span class="icon-class">zmdi-border-clear</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-color"></span></div><span class="icon-class">zmdi-border-color</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-horizontal"></span></div><span class="icon-class">zmdi-border-horizontal</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-inner"></span></div><span class="icon-class">zmdi-border-inner</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-left"></span></div><span class="icon-class">zmdi-border-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-outer"></span></div><span class="icon-class">zmdi-border-outer</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-right"></span></div><span class="icon-class">zmdi-border-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-style"></span></div><span class="icon-class">zmdi-border-style</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-top"></span></div><span class="icon-class">zmdi-border-top</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-border-vertical"></span></div><span class="icon-class">zmdi-border-vertical</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-copy"></span></div><span class="icon-class">zmdi-copy</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop"></span></div><span class="icon-class">zmdi-crop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-align-center"></span></div><span class="icon-class">zmdi-format-align-center</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-align-justify"></span></div><span class="icon-class">zmdi-format-align-justify</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-align-left"></span></div><span class="icon-class">zmdi-format-align-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-align-right"></span></div><span class="icon-class">zmdi-format-align-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-bold"></span></div><span class="icon-class">zmdi-format-bold</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-clear-all"></span></div><span class="icon-class">zmdi-format-clear-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-clear"></span></div><span class="icon-class">zmdi-format-clear</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-color-fill"></span></div><span class="icon-class">zmdi-format-color-fill</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-color-reset"></span></div><span class="icon-class">zmdi-format-color-reset</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-color-text"></span></div><span class="icon-class">zmdi-format-color-text</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-indent-decrease"></span></div><span class="icon-class">zmdi-format-indent-decrease</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-indent-increase"></span></div><span class="icon-class">zmdi-format-indent-increase</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-italic"></span></div><span class="icon-class">zmdi-format-italic</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-line-spacing"></span></div><span class="icon-class">zmdi-format-line-spacing</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-list-bulleted"></span></div><span class="icon-class">zmdi-format-list-bulleted</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-list-numbered"></span></div><span class="icon-class">zmdi-format-list-numbered</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-ltr"></span></div><span class="icon-class">zmdi-format-ltr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-rtl"></span></div><span class="icon-class">zmdi-format-rtl</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-size"></span></div><span class="icon-class">zmdi-format-size</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-strikethrough-s"></span></div><span class="icon-class">zmdi-format-strikethrough-s</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-strikethrough"></span></div><span class="icon-class">zmdi-format-strikethrough</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-subject"></span></div><span class="icon-class">zmdi-format-subject</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-underlined"></span></div><span class="icon-class">zmdi-format-underlined</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-valign-bottom"></span></div><span class="icon-class">zmdi-format-valign-bottom</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-valign-center"></span></div><span class="icon-class">zmdi-format-valign-center</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-format-valign-top"></span></div><span class="icon-class">zmdi-format-valign-top</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-redo"></span></div><span class="icon-class">zmdi-redo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-select-all"></span></div><span class="icon-class">zmdi-select-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-space-bar"></span></div><span class="icon-class">zmdi-space-bar</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-text-format"></span></div><span class="icon-class">zmdi-text-format</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-transform"></span></div><span class="icon-class">zmdi-transform</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-undo"></span></div><span class="icon-class">zmdi-undo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wrap-text"></span></div><span class="icon-class">zmdi-wrap-text</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="comment">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Comment<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-alert"></span></div><span class="icon-class">zmdi-comment-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-alt-text"></span></div><span class="icon-class">zmdi-comment-alt-text</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-alt"></span></div><span class="icon-class">zmdi-comment-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-edit"></span></div><span class="icon-class">zmdi-comment-edit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-image"></span></div><span class="icon-class">zmdi-comment-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-list"></span></div><span class="icon-class">zmdi-comment-list</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-more"></span></div><span class="icon-class">zmdi-comment-more</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-outline"></span></div><span class="icon-class">zmdi-comment-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-text-alt"></span></div><span class="icon-class">zmdi-comment-text-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-text"></span></div><span class="icon-class">zmdi-comment-text</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment-video"></span></div><span class="icon-class">zmdi-comment-video</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comment"></span></div><span class="icon-class">zmdi-comment</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-comments"></span></div><span class="icon-class">zmdi-comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="form">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Form<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-check-all"></span></div><span class="icon-class">zmdi-check-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-check-circle-u"></span></div><span class="icon-class">zmdi-check-circle-u</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-check-circle"></span></div><span class="icon-class">zmdi-check-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-check-square"></span></div><span class="icon-class">zmdi-check-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-check"></span></div><span class="icon-class">zmdi-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-circle-o"></span></div><span class="icon-class">zmdi-circle-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-circle"></span></div><span class="icon-class">zmdi-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dot-circle-alt"></span></div><span class="icon-class">zmdi-dot-circle-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dot-circle"></span></div><span class="icon-class">zmdi-dot-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-minus-circle-outline"></span></div><span class="icon-class">zmdi-minus-circle-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-minus-circle"></span></div><span class="icon-class">zmdi-minus-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-minus-square"></span></div><span class="icon-class">zmdi-minus-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-minus"></span></div><span class="icon-class">zmdi-minus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-circle-o-duplicate"></span></div><span class="icon-class">zmdi-plus-circle-o-duplicate</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-circle-o"></span></div><span class="icon-class">zmdi-plus-circle-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-circle"></span></div><span class="icon-class">zmdi-plus-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-square"></span></div><span class="icon-class">zmdi-plus-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus"></span></div><span class="icon-class">zmdi-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-square-o"></span></div><span class="icon-class">zmdi-square-o</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-star-circle"></span></div><span class="icon-class">zmdi-star-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-star-half"></span></div><span class="icon-class">zmdi-star-half</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-star-outline"></span></div><span class="icon-class">zmdi-star-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-star"></span></div><span class="icon-class">zmdi-star</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="hardware">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Hardware<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bluetooth-connected"></span></div><span class="icon-class">zmdi-bluetooth-connected</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bluetooth-off"></span></div><span class="icon-class">zmdi-bluetooth-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bluetooth-search"></span></div><span class="icon-class">zmdi-bluetooth-search</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bluetooth-setting"></span></div><span class="icon-class">zmdi-bluetooth-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-bluetooth"></span></div><span class="icon-class">zmdi-bluetooth</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-add"></span></div><span class="icon-class">zmdi-camera-add</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-alt"></span></div><span class="icon-class">zmdi-camera-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-bw"></span></div><span class="icon-class">zmdi-camera-bw</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-front"></span></div><span class="icon-class">zmdi-camera-front</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-mic"></span></div><span class="icon-class">zmdi-camera-mic</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-party-mode"></span></div><span class="icon-class">zmdi-camera-party-mode</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-rear"></span></div><span class="icon-class">zmdi-camera-rear</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-roll"></span></div><span class="icon-class">zmdi-camera-roll</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera-switch"></span></div><span class="icon-class">zmdi-camera-switch</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-camera"></span></div><span class="icon-class">zmdi-camera</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-alert"></span></div><span class="icon-class">zmdi-card-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-off"></span></div><span class="icon-class">zmdi-card-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-sd"></span></div><span class="icon-class">zmdi-card-sd</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-card-sim"></span></div><span class="icon-class">zmdi-card-sim</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-desktop-mac"></span></div><span class="icon-class">zmdi-desktop-mac</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-desktop-windows"></span></div><span class="icon-class">zmdi-desktop-windows</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-device-hub"></span></div><span class="icon-class">zmdi-device-hub</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-devices-off"></span></div><span class="icon-class">zmdi-devices-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-devices"></span></div><span class="icon-class">zmdi-devices</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dock"></span></div><span class="icon-class">zmdi-dock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-floppy"></span></div><span class="icon-class">zmdi-floppy</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gamepad"></span></div><span class="icon-class">zmdi-gamepad</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gps-dot"></span></div><span class="icon-class">zmdi-gps-dot</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gps-off"></span></div><span class="icon-class">zmdi-gps-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gps"></span></div><span class="icon-class">zmdi-gps</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-headset-mic"></span></div><span class="icon-class">zmdi-headset-mic</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-headset"></span></div><span class="icon-class">zmdi-headset</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-input-antenna"></span></div><span class="icon-class">zmdi-input-antenna</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-input-composite"></span></div><span class="icon-class">zmdi-input-composite</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-input-hdmi"></span></div><span class="icon-class">zmdi-input-hdmi</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-input-power"></span></div><span class="icon-class">zmdi-input-power</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-input-svideo"></span></div><span class="icon-class">zmdi-input-svideo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-keyboard-hide"></span></div><span class="icon-class">zmdi-keyboard-hide</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-keyboard"></span></div><span class="icon-class">zmdi-keyboard</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-laptop-chromebook"></span></div><span class="icon-class">zmdi-laptop-chromebook</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-laptop-mac"></span></div><span class="icon-class">zmdi-laptop-mac</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-laptop"></span></div><span class="icon-class">zmdi-laptop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mic-off"></span></div><span class="icon-class">zmdi-mic-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mic-outline"></span></div><span class="icon-class">zmdi-mic-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mic-setting"></span></div><span class="icon-class">zmdi-mic-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mic"></span></div><span class="icon-class">zmdi-mic</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-mouse"></span></div><span class="icon-class">zmdi-mouse</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network-alert"></span></div><span class="icon-class">zmdi-network-alert</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network-locked"></span></div><span class="icon-class">zmdi-network-locked</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network-off"></span></div><span class="icon-class">zmdi-network-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network-outline"></span></div><span class="icon-class">zmdi-network-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network-setting"></span></div><span class="icon-class">zmdi-network-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-network"></span></div><span class="icon-class">zmdi-network</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-bluetooth"></span></div><span class="icon-class">zmdi-phone-bluetooth</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-end"></span></div><span class="icon-class">zmdi-phone-end</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-forwarded"></span></div><span class="icon-class">zmdi-phone-forwarded</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-in-talk"></span></div><span class="icon-class">zmdi-phone-in-talk</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-locked"></span></div><span class="icon-class">zmdi-phone-locked</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-missed"></span></div><span class="icon-class">zmdi-phone-missed</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-msg"></span></div><span class="icon-class">zmdi-phone-msg</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-paused"></span></div><span class="icon-class">zmdi-phone-paused</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-ring"></span></div><span class="icon-class">zmdi-phone-ring</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-setting"></span></div><span class="icon-class">zmdi-phone-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone-sip"></span></div><span class="icon-class">zmdi-phone-sip</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-phone"></span></div><span class="icon-class">zmdi-phone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-portable-wifi-changes"></span></div><span class="icon-class">zmdi-portable-wifi-changes</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-portable-wifi-off"></span></div><span class="icon-class">zmdi-portable-wifi-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-portable-wifi"></span></div><span class="icon-class">zmdi-portable-wifi</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-radio"></span></div><span class="icon-class">zmdi-radio</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-reader"></span></div><span class="icon-class">zmdi-reader</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-remote-control-alt"></span></div><span class="icon-class">zmdi-remote-control-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-remote-control"></span></div><span class="icon-class">zmdi-remote-control</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-router"></span></div><span class="icon-class">zmdi-router</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-scanner"></span></div><span class="icon-class">zmdi-scanner</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-android"></span></div><span class="icon-class">zmdi-smartphone-android</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-download"></span></div><span class="icon-class">zmdi-smartphone-download</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-erase"></span></div><span class="icon-class">zmdi-smartphone-erase</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-info"></span></div><span class="icon-class">zmdi-smartphone-info</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-iphone"></span></div><span class="icon-class">zmdi-smartphone-iphone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-landscape-lock"></span></div><span class="icon-class">zmdi-smartphone-landscape-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-landscape"></span></div><span class="icon-class">zmdi-smartphone-landscape</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-lock"></span></div><span class="icon-class">zmdi-smartphone-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-portrait-lock"></span></div><span class="icon-class">zmdi-smartphone-portrait-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-ring"></span></div><span class="icon-class">zmdi-smartphone-ring</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-setting"></span></div><span class="icon-class">zmdi-smartphone-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone-setup"></span></div><span class="icon-class">zmdi-smartphone-setup</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-smartphone"></span></div><span class="icon-class">zmdi-smartphone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-speaker"></span></div><span class="icon-class">zmdi-speaker</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tablet-android"></span></div><span class="icon-class">zmdi-tablet-android</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tablet-mac"></span></div><span class="icon-class">zmdi-tablet-mac</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tablet"></span></div><span class="icon-class">zmdi-tablet</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tv-alt-play"></span></div><span class="icon-class">zmdi-tv-alt-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tv-list"></span></div><span class="icon-class">zmdi-tv-list</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tv-play"></span></div><span class="icon-class">zmdi-tv-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tv"></span></div><span class="icon-class">zmdi-tv</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-usb"></span></div><span class="icon-class">zmdi-usb</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-videocam-off"></span></div><span class="icon-class">zmdi-videocam-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-videocam-switch"></span></div><span class="icon-class">zmdi-videocam-switch</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-videocam"></span></div><span class="icon-class">zmdi-videocam</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-watch"></span></div><span class="icon-class">zmdi-watch</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-alt-2"></span></div><span class="icon-class">zmdi-wifi-alt-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-alt"></span></div><span class="icon-class">zmdi-wifi-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-info"></span></div><span class="icon-class">zmdi-wifi-info</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-lock"></span></div><span class="icon-class">zmdi-wifi-lock</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-off"></span></div><span class="icon-class">zmdi-wifi-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi-outline"></span></div><span class="icon-class">zmdi-wifi-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wifi"></span></div><span class="icon-class">zmdi-wifi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="directional">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Directional<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-left-bottom"></span></div><span class="icon-class">zmdi-arrow-left-bottom</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-left"></span></div><span class="icon-class">zmdi-arrow-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-merge"></span></div><span class="icon-class">zmdi-arrow-merge</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-missed"></span></div><span class="icon-class">zmdi-arrow-missed</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-right-top"></span></div><span class="icon-class">zmdi-arrow-right-top</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-right"></span></div><span class="icon-class">zmdi-arrow-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrow-split"></span></div><span class="icon-class">zmdi-arrow-split</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-arrows"></span></div><span class="icon-class">zmdi-arrows</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-down-circle"></span></div><span class="icon-class">zmdi-caret-down-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-down"></span></div><span class="icon-class">zmdi-caret-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-left-circle"></span></div><span class="icon-class">zmdi-caret-left-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-left"></span></div><span class="icon-class">zmdi-caret-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-right-circle"></span></div><span class="icon-class">zmdi-caret-right-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-right"></span></div><span class="icon-class">zmdi-caret-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-up-circle"></span></div><span class="icon-class">zmdi-caret-up-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-caret-up"></span></div><span class="icon-class">zmdi-caret-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chevron-down"></span></div><span class="icon-class">zmdi-chevron-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chevron-left"></span></div><span class="icon-class">zmdi-chevron-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chevron-right"></span></div><span class="icon-class">zmdi-chevron-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-chevron-up"></span></div><span class="icon-class">zmdi-chevron-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-forward"></span></div><span class="icon-class">zmdi-forward</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-down"></span></div><span class="icon-class">zmdi-long-arrow-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-left"></span></div><span class="icon-class">zmdi-long-arrow-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-return"></span></div><span class="icon-class">zmdi-long-arrow-return</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-right"></span></div><span class="icon-class">zmdi-long-arrow-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-tab"></span></div><span class="icon-class">zmdi-long-arrow-tab</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-long-arrow-up"></span></div><span class="icon-class">zmdi-long-arrow-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rotate-ccw"></span></div><span class="icon-class">zmdi-rotate-ccw</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rotate-cw"></span></div><span class="icon-class">zmdi-rotate-cw</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rotate-left"></span></div><span class="icon-class">zmdi-rotate-left</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rotate-right"></span></div><span class="icon-class">zmdi-rotate-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-square-down"></span></div><span class="icon-class">zmdi-square-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-square-right"></span></div><span class="icon-class">zmdi-square-right</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-swap-alt"></span></div><span class="icon-class">zmdi-swap-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-swap-vertical-circle"></span></div><span class="icon-class">zmdi-swap-vertical-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-swap-vertical"></span></div><span class="icon-class">zmdi-swap-vertical</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-swap"></span></div><span class="icon-class">zmdi-swap</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-trending-down"></span></div><span class="icon-class">zmdi-trending-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-trending-flat"></span></div><span class="icon-class">zmdi-trending-flat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-trending-up"></span></div><span class="icon-class">zmdi-trending-up</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-unfold-less"></span></div><span class="icon-class">zmdi-unfold-less</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-unfold-more"></span></div><span class="icon-class">zmdi-unfold-more</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="map">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Map (aliases)<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-bike"></span></div><span class="icon-class">zmdi-directions-bike</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-boat"></span></div><span class="icon-class">zmdi-directions-boat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-bus"></span></div><span class="icon-class">zmdi-directions-bus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-car"></span></div><span class="icon-class">zmdi-directions-car</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-railway"></span></div><span class="icon-class">zmdi-directions-railway</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-run"></span></div><span class="icon-class">zmdi-directions-run</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-subway"></span></div><span class="icon-class">zmdi-directions-subway</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions-walk"></span></div><span class="icon-class">zmdi-directions-walk</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-directions"></span></div><span class="icon-class">zmdi-directions</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-layers-off"></span></div><span class="icon-class">zmdi-layers-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-layers"></span></div><span class="icon-class">zmdi-layers</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-activity"></span></div><span class="icon-class">zmdi-local-activity</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-airport"></span></div><span class="icon-class">zmdi-local-airport</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-atm"></span></div><span class="icon-class">zmdi-local-atm</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-bar"></span></div><span class="icon-class">zmdi-local-bar</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-cafe"></span></div><span class="icon-class">zmdi-local-cafe</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-car-wash"></span></div><span class="icon-class">zmdi-local-car-wash</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-convenience-store"></span></div><span class="icon-class">zmdi-local-convenience-store</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-dining"></span></div><span class="icon-class">zmdi-local-dining</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-drink"></span></div><span class="icon-class">zmdi-local-drink</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-florist"></span></div><span class="icon-class">zmdi-local-florist</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-gas-station"></span></div><span class="icon-class">zmdi-local-gas-station</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-grocery-store"></span></div><span class="icon-class">zmdi-local-grocery-store</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-hospital"></span></div><span class="icon-class">zmdi-local-hospital</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-hotel"></span></div><span class="icon-class">zmdi-local-hotel</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-laundry-service"></span></div><span class="icon-class">zmdi-local-laundry-service</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-library"></span></div><span class="icon-class">zmdi-local-library</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-mall"></span></div><span class="icon-class">zmdi-local-mall</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-movies"></span></div><span class="icon-class">zmdi-local-movies</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-offer"></span></div><span class="icon-class">zmdi-local-offer</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-parking"></span></div><span class="icon-class">zmdi-local-parking</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-pharmacy"></span></div><span class="icon-class">zmdi-local-pharmacy</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-phone"></span></div><span class="icon-class">zmdi-local-phone</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-pizza"></span></div><span class="icon-class">zmdi-local-pizza</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-post-office"></span></div><span class="icon-class">zmdi-local-post-office</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-printshop"></span></div><span class="icon-class">zmdi-local-printshop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-see"></span></div><span class="icon-class">zmdi-local-see</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-shipping"></span></div><span class="icon-class">zmdi-local-shipping</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-store"></span></div><span class="icon-class">zmdi-local-store</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-taxi"></span></div><span class="icon-class">zmdi-local-taxi</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-local-wc"></span></div><span class="icon-class">zmdi-local-wc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-map"></span></div><span class="icon-class">zmdi-map</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-my-location"></span></div><span class="icon-class">zmdi-my-location</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-nature-people"></span></div><span class="icon-class">zmdi-nature-people</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-nature"></span></div><span class="icon-class">zmdi-nature</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-navigation"></span></div><span class="icon-class">zmdi-navigation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-account"></span></div><span class="icon-class">zmdi-pin-account</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-assistant"></span></div><span class="icon-class">zmdi-pin-assistant</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-drop"></span></div><span class="icon-class">zmdi-pin-drop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-help"></span></div><span class="icon-class">zmdi-pin-help</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin-off"></span></div><span class="icon-class">zmdi-pin-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pin"></span></div><span class="icon-class">zmdi-pin</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-traffic"></span></div><span class="icon-class">zmdi-traffic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="view">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">View<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-apps"></span></div><span class="icon-class">zmdi-apps</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-grid-off"></span></div><span class="icon-class">zmdi-grid-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-grid"></span></div><span class="icon-class">zmdi-grid</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-agenda"></span></div><span class="icon-class">zmdi-view-agenda</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-array"></span></div><span class="icon-class">zmdi-view-array</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-carousel"></span></div><span class="icon-class">zmdi-view-carousel</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-column"></span></div><span class="icon-class">zmdi-view-column</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-comfy"></span></div><span class="icon-class">zmdi-view-comfy</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-compact"></span></div><span class="icon-class">zmdi-view-compact</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-dashboard"></span></div><span class="icon-class">zmdi-view-dashboard</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-day"></span></div><span class="icon-class">zmdi-view-day</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-headline"></span></div><span class="icon-class">zmdi-view-headline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-list-alt"></span></div><span class="icon-class">zmdi-view-list-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-list"></span></div><span class="icon-class">zmdi-view-list</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-module"></span></div><span class="icon-class">zmdi-view-module</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-quilt"></span></div><span class="icon-class">zmdi-view-quilt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-stream"></span></div><span class="icon-class">zmdi-view-stream</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-subtitles"></span></div><span class="icon-class">zmdi-view-subtitles</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-toc"></span></div><span class="icon-class">zmdi-view-toc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-web"></span></div><span class="icon-class">zmdi-view-web</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-view-week"></span></div><span class="icon-class">zmdi-view-week</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-widgets"></span></div><span class="icon-class">zmdi-widgets</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="date-time">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Date / Time<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alarm-check"></span></div><span class="icon-class">zmdi-alarm-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alarm-off"></span></div><span class="icon-class">zmdi-alarm-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alarm-plus"></span></div><span class="icon-class">zmdi-alarm-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alarm-snooze"></span></div><span class="icon-class">zmdi-alarm-snooze</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-alarm"></span></div><span class="icon-class">zmdi-alarm</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-calendar-alt"></span></div><span class="icon-class">zmdi-calendar-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-calendar-check"></span></div><span class="icon-class">zmdi-calendar-check</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-calendar-close"></span></div><span class="icon-class">zmdi-calendar-close</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-calendar-note"></span></div><span class="icon-class">zmdi-calendar-note</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-calendar"></span></div><span class="icon-class">zmdi-calendar</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-time-countdown"></span></div><span class="icon-class">zmdi-time-countdown</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-time-interval"></span></div><span class="icon-class">zmdi-time-interval</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-time-restore-setting"></span></div><span class="icon-class">zmdi-time-restore-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-time-restore"></span></div><span class="icon-class">zmdi-time-restore</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-time"></span></div><span class="icon-class">zmdi-time</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-timer-off"></span></div><span class="icon-class">zmdi-timer-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-timer"></span></div><span class="icon-class">zmdi-timer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="social">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Social<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-android-alt"></span></div><span class="icon-class">zmdi-android-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-android"></span></div><span class="icon-class">zmdi-android</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-apple"></span></div><span class="icon-class">zmdi-apple</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-behance"></span></div><span class="icon-class">zmdi-behance</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-codepen"></span></div><span class="icon-class">zmdi-codepen</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dribbble"></span></div><span class="icon-class">zmdi-dribbble</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-dropbox"></span></div><span class="icon-class">zmdi-dropbox</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-evernote"></span></div><span class="icon-class">zmdi-evernote</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-facebook-box"></span></div><span class="icon-class">zmdi-facebook-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-facebook"></span></div><span class="icon-class">zmdi-facebook</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-github-box"></span></div><span class="icon-class">zmdi-github-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-github"></span></div><span class="icon-class">zmdi-github</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-drive"></span></div><span class="icon-class">zmdi-google-drive</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-earth"></span></div><span class="icon-class">zmdi-google-earth</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-glass"></span></div><span class="icon-class">zmdi-google-glass</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-maps"></span></div><span class="icon-class">zmdi-google-maps</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-pages"></span></div><span class="icon-class">zmdi-google-pages</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-play"></span></div><span class="icon-class">zmdi-google-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-plus-box"></span></div><span class="icon-class">zmdi-google-plus-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-plus"></span></div><span class="icon-class">zmdi-google-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google"></span></div><span class="icon-class">zmdi-google</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-instagram"></span></div><span class="icon-class">zmdi-instagram</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-language-css3"></span></div><span class="icon-class">zmdi-language-css3</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-language-html5"></span></div><span class="icon-class">zmdi-language-html5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-language-javascript"></span></div><span class="icon-class">zmdi-language-javascript</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-language-python-alt"></span></div><span class="icon-class">zmdi-language-python-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-language-python"></span></div><span class="icon-class">zmdi-language-python</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-lastfm"></span></div><span class="icon-class">zmdi-lastfm</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-linkedin-box"></span></div><span class="icon-class">zmdi-linkedin-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-paypal"></span></div><span class="icon-class">zmdi-paypal</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pinterest-box"></span></div><span class="icon-class">zmdi-pinterest-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pocket"></span></div><span class="icon-class">zmdi-pocket</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-polymer"></span></div><span class="icon-class">zmdi-polymer</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-rss"></span></div><span class="icon-class">zmdi-rss</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-share"></span></div><span class="icon-class">zmdi-share</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-stackoverflow"></span></div><span class="icon-class">zmdi-stackoverflow</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-steam-square"></span></div><span class="icon-class">zmdi-steam-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-steam"></span></div><span class="icon-class">zmdi-steam</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-twitter-box"></span></div><span class="icon-class">zmdi-twitter-box</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-twitter"></span></div><span class="icon-class">zmdi-twitter</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-vk"></span></div><span class="icon-class">zmdi-vk</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wikipedia"></span></div><span class="icon-class">zmdi-wikipedia</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-windows"></span></div><span class="icon-class">zmdi-windows</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-500px"></span></div><span class="icon-class">zmdi-500px</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-8tracks"></span></div><span class="icon-class">zmdi-8tracks</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-amazon"></span></div><span class="icon-class">zmdi-amazon</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blogger"></span></div><span class="icon-class">zmdi-blogger</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-delicious"></span></div><span class="icon-class">zmdi-delicious</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-disqus"></span></div><span class="icon-class">zmdi-disqus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flattr"></span></div><span class="icon-class">zmdi-flattr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flickr"></span></div><span class="icon-class">zmdi-flickr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-github-alt"></span></div><span class="icon-class">zmdi-github-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-google-old"></span></div><span class="icon-class">zmdi-google-old</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-linkedin"></span></div><span class="icon-class">zmdi-linkedin</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-odnoklassniki"></span></div><span class="icon-class">zmdi-odnoklassniki</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-outlook"></span></div><span class="icon-class">zmdi-outlook</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-paypal-alt"></span></div><span class="icon-class">zmdi-paypal-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pinterest"></span></div><span class="icon-class">zmdi-pinterest</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-playstation"></span></div><span class="icon-class">zmdi-playstation</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-reddit"></span></div><span class="icon-class">zmdi-reddit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-skype"></span></div><span class="icon-class">zmdi-skype</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-slideshare"></span></div><span class="icon-class">zmdi-slideshare</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-soundcloud"></span></div><span class="icon-class">zmdi-soundcloud</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tumblr"></span></div><span class="icon-class">zmdi-tumblr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-twitch"></span></div><span class="icon-class">zmdi-twitch</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-vimeo"></span></div><span class="icon-class">zmdi-vimeo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-whatsapp"></span></div><span class="icon-class">zmdi-whatsapp</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-xbox"></span></div><span class="icon-class">zmdi-xbox</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-yahoo"></span></div><span class="icon-class">zmdi-yahoo</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-youtube-play"></span></div><span class="icon-class">zmdi-youtube-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-youtube"></span></div><span class="icon-class">zmdi-youtube</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="image">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Image<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-aspect-ratio-alt"></span></div><span class="icon-class">zmdi-aspect-ratio-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-aspect-ratio"></span></div><span class="icon-class">zmdi-aspect-ratio</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blur-circular"></span></div><span class="icon-class">zmdi-blur-circular</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blur-linear"></span></div><span class="icon-class">zmdi-blur-linear</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blur-off"></span></div><span class="icon-class">zmdi-blur-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-blur"></span></div><span class="icon-class">zmdi-blur</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-2"></span></div><span class="icon-class">zmdi-brightness-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-3"></span></div><span class="icon-class">zmdi-brightness-3</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-4"></span></div><span class="icon-class">zmdi-brightness-4</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-5"></span></div><span class="icon-class">zmdi-brightness-5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-6"></span></div><span class="icon-class">zmdi-brightness-6</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-7"></span></div><span class="icon-class">zmdi-brightness-7</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-auto"></span></div><span class="icon-class">zmdi-brightness-auto</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-brightness-setting"></span></div><span class="icon-class">zmdi-brightness-setting</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-broken-image"></span></div><span class="icon-class">zmdi-broken-image</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-center-focus-strong"></span></div><span class="icon-class">zmdi-center-focus-strong</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-center-focus-weak"></span></div><span class="icon-class">zmdi-center-focus-weak</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-compare"></span></div><span class="icon-class">zmdi-compare</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-16-9"></span></div><span class="icon-class">zmdi-crop-16-9</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-3-2"></span></div><span class="icon-class">zmdi-crop-3-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-5-4"></span></div><span class="icon-class">zmdi-crop-5-4</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-7-5"></span></div><span class="icon-class">zmdi-crop-7-5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-din"></span></div><span class="icon-class">zmdi-crop-din</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-free"></span></div><span class="icon-class">zmdi-crop-free</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-landscape"></span></div><span class="icon-class">zmdi-crop-landscape</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-portrait"></span></div><span class="icon-class">zmdi-crop-portrait</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-crop-square"></span></div><span class="icon-class">zmdi-crop-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-exposure-alt"></span></div><span class="icon-class">zmdi-exposure-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-exposure"></span></div><span class="icon-class">zmdi-exposure</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-filter-b-and-w"></span></div><span class="icon-class">zmdi-filter-b-and-w</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-filter-center-focus"></span></div><span class="icon-class">zmdi-filter-center-focus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-filter-frames"></span></div><span class="icon-class">zmdi-filter-frames</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-filter-tilt-shift"></span></div><span class="icon-class">zmdi-filter-tilt-shift</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-gradient"></span></div><span class="icon-class">zmdi-gradient</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-grain"></span></div><span class="icon-class">zmdi-grain</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-graphic-eq"></span></div><span class="icon-class">zmdi-graphic-eq</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hdr-off"></span></div><span class="icon-class">zmdi-hdr-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hdr-strong"></span></div><span class="icon-class">zmdi-hdr-strong</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hdr-weak"></span></div><span class="icon-class">zmdi-hdr-weak</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hdr"></span></div><span class="icon-class">zmdi-hdr</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-iridescent"></span></div><span class="icon-class">zmdi-iridescent</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-leak-off"></span></div><span class="icon-class">zmdi-leak-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-leak"></span></div><span class="icon-class">zmdi-leak</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-looks"></span></div><span class="icon-class">zmdi-looks</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-loupe"></span></div><span class="icon-class">zmdi-loupe</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-panorama-horizontal"></span></div><span class="icon-class">zmdi-panorama-horizontal</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-panorama-vertical"></span></div><span class="icon-class">zmdi-panorama-vertical</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-panorama-wide-angle"></span></div><span class="icon-class">zmdi-panorama-wide-angle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-photo-size-select-large"></span></div><span class="icon-class">zmdi-photo-size-select-large</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-photo-size-select-small"></span></div><span class="icon-class">zmdi-photo-size-select-small</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-picture-in-picture"></span></div><span class="icon-class">zmdi-picture-in-picture</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-slideshow"></span></div><span class="icon-class">zmdi-slideshow</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-texture"></span></div><span class="icon-class">zmdi-texture</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tonality"></span></div><span class="icon-class">zmdi-tonality</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-vignette"></span></div><span class="icon-class">zmdi-vignette</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-wb-auto"></span></div><span class="icon-class">zmdi-wb-auto</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="audio-video">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Audio / Video<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-eject-alt"></span></div><span class="icon-class">zmdi-eject-alt</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-eject"></span></div><span class="icon-class">zmdi-eject</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-equalizer"></span></div><span class="icon-class">zmdi-equalizer</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fast-forward"></span></div><span class="icon-class">zmdi-fast-forward</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-fast-rewind"></span></div><span class="icon-class">zmdi-fast-rewind</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-forward-10"></span></div><span class="icon-class">zmdi-forward-10</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-forward-30"></span></div><span class="icon-class">zmdi-forward-30</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-forward-5"></span></div><span class="icon-class">zmdi-forward-5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hearing"></span></div><span class="icon-class">zmdi-hearing</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pause-circle-outline"></span></div><span class="icon-class">zmdi-pause-circle-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pause-circle"></span></div><span class="icon-class">zmdi-pause-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-pause"></span></div><span class="icon-class">zmdi-pause</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-play-circle-outline"></span></div><span class="icon-class">zmdi-play-circle-outline</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-play-circle"></span></div><span class="icon-class">zmdi-play-circle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-play"></span></div><span class="icon-class">zmdi-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-playlist-audio"></span></div><span class="icon-class">zmdi-playlist-audio</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-playlist-plus"></span></div><span class="icon-class">zmdi-playlist-plus</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-repeat-one"></span></div><span class="icon-class">zmdi-repeat-one</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-repeat"></span></div><span class="icon-class">zmdi-repeat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-replay-10"></span></div><span class="icon-class">zmdi-replay-10</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-replay-30"></span></div><span class="icon-class">zmdi-replay-30</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-replay-5"></span></div><span class="icon-class">zmdi-replay-5</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-replay"></span></div><span class="icon-class">zmdi-replay</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-shuffle"></span></div><span class="icon-class">zmdi-shuffle</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-skip-next"></span></div><span class="icon-class">zmdi-skip-next</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-skip-previous"></span></div><span class="icon-class">zmdi-skip-previous</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-stop"></span></div><span class="icon-class">zmdi-stop</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-surround-sound"></span></div><span class="icon-class">zmdi-surround-sound</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tune"></span></div><span class="icon-class">zmdi-tune</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-volume-down"></span></div><span class="icon-class">zmdi-volume-down</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-volume-mute"></span></div><span class="icon-class">zmdi-volume-mute</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-volume-off"></span></div><span class="icon-class">zmdi-volume-off</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-volume-up"></span></div><span class="icon-class">zmdi-volume-up</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="numbers">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Numbers<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-1-square"></span></div><span class="icon-class">zmdi-n-1-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-2-square"></span></div><span class="icon-class">zmdi-n-2-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-3-square"></span></div><span class="icon-class">zmdi-n-3-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-4-square"></span></div><span class="icon-class">zmdi-n-4-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-5-square"></span></div><span class="icon-class">zmdi-n-5-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-n-6-square"></span></div><span class="icon-class">zmdi-n-6-square</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-neg-1"></span></div><span class="icon-class">zmdi-neg-1</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-neg-2"></span></div><span class="icon-class">zmdi-neg-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-1"></span></div><span class="icon-class">zmdi-plus-1</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-plus-2"></span></div><span class="icon-class">zmdi-plus-2</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sec-10"></span></div><span class="icon-class">zmdi-sec-10</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-sec-3"></span></div><span class="icon-class">zmdi-sec-3</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-zero"></span></div><span class="icon-class">zmdi-zero</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row icon-category" id="other">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-divider">Other<span class="card-subtitle"><strong>How to use:</strong> <code>&lt;i class="icon zmdi &lt;&lt;<em>Icon class</em>&gt;&gt;"&gt;&lt;/i&gt;</code></span></div>
                    <div class="card-body mt-3">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-flat-angled"></span></div><span class="icon-class">zmdi-airline-seat-flat-angled</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-flat"></span></div><span class="icon-class">zmdi-airline-seat-flat</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-individual-suite"></span></div><span class="icon-class">zmdi-airline-seat-individual-suite</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-legroom-extra"></span></div><span class="icon-class">zmdi-airline-seat-legroom-extra</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-legroom-normal"></span></div><span class="icon-class">zmdi-airline-seat-legroom-normal</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-legroom-reduced"></span></div><span class="icon-class">zmdi-airline-seat-legroom-reduced</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-recline-extra"></span></div><span class="icon-class">zmdi-airline-seat-recline-extra</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airline-seat-recline-normal"></span></div><span class="icon-class">zmdi-airline-seat-recline-normal</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-airplay"></span></div><span class="icon-class">zmdi-airplay</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-closed-caption"></span></div><span class="icon-class">zmdi-closed-caption</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-confirmation-number"></span></div><span class="icon-class">zmdi-confirmation-number</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-developer-board"></span></div><span class="icon-class">zmdi-developer-board</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-disc-full"></span></div><span class="icon-class">zmdi-disc-full</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-explicit"></span></div><span class="icon-class">zmdi-explicit</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flight-land"></span></div><span class="icon-class">zmdi-flight-land</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flight-takeoff"></span></div><span class="icon-class">zmdi-flight-takeoff</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flip-to-back"></span></div><span class="icon-class">zmdi-flip-to-back</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-flip-to-front"></span></div><span class="icon-class">zmdi-flip-to-front</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-group-work"></span></div><span class="icon-class">zmdi-group-work</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hd"></span></div><span class="icon-class">zmdi-hd</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-hq"></span></div><span class="icon-class">zmdi-hq</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-markunread-mailbox"></span></div><span class="icon-class">zmdi-markunread-mailbox</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-memory"></span></div><span class="icon-class">zmdi-memory</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-nfc"></span></div><span class="icon-class">zmdi-nfc</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-play-for-work"></span></div><span class="icon-class">zmdi-play-for-work</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-power-input"></span></div><span class="icon-class">zmdi-power-input</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-present-to-all"></span></div><span class="icon-class">zmdi-present-to-all</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-satellite"></span></div><span class="icon-class">zmdi-satellite</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-tap-and-play"></span></div><span class="icon-class">zmdi-tap-and-play</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-vibration"></span></div><span class="icon-class">zmdi-vibration</span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="icon-container">
                                    <div class="icon"><span class="zmdi zmdi-voicemail"></span></div><span class="icon-class">zmdi-voicemail</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
@endpush