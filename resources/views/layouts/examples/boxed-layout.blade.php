@extends('layouts.examples._core', ['class' => 'be-alt-bg'])

@section('layout')
<div class="be-wrapper be-boxed-layout">
    {{-- Navbar --}}
    @includeIf('include.navbar')
    {{-- Left Sidebar --}}
    @includeIf('include.left-sidebar')
    {{-- Content --}}
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">Boxed Layout</h2>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb page-head-nav">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                    <li class="breadcrumb-item active">Boxed Layout</li>
                </ol>
            </nav>
        </div>
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-12 col-lg-7 offset-lg-2">
                    <div class="card">
                        <div class="card-header"><span class="title">Boxed layout</span></div>
                        <div class="card-body">
                            <p>Para activar el "boxed layout", en <code>layouts/app.blade.php</code> se le coloca el parámetro (<code>'class' => 'be-alt-bg'</code>) al apartado <code>extends</code>, y se agrega esta clase (<code>be-boxed-layout</code>) al elemento "main wrapper" (<code>be-wrapper</code>). Al final, quedará algo como esto</p>
                        </div>
                        <pre class="prettyprint">
<span class="text-primary">&#64;extends</span>(&#39;layouts._core&#39;)

&#64;section(&#39;layout&#39;)
  &lt;div class=&quot;be-wrapper&quot;&gt;
        {{-- Navbar --}}
        &#64;includeIf(&#39;include.navbar&#39;)
        {{-- Left Sidebar --}}
        &#64;includeIf(&#39;include.left-sidebar&#39;)
        {{-- Content --}}
        &lt;div class=&quot;be-content&quot;&gt;
            &lt;div class=&quot;page-head&quot;&gt;
                &#64;yield(&#39;header&#39;)
            &lt;/div&gt;
            &lt;div class=&quot;main-content container-fluid&quot;&gt;
                &#64;yield(&#39;content&#39;)
            &lt;/div&gt;
        &lt;/div&gt;
        {{-- Right Sidebar --}}
        &#64;includeIf(&#39;include.right-sidebar&#39;)
    &lt;/div&gt;
&#64;endsection
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Right Sidebar --}}
    @includeIf('include.right-sidebar')
</div>
@endsection

@push('scripts')
    <script src="{{ asset('lib/prettify/prettify.js') }}" type="text/javascript"></script>
@endpush