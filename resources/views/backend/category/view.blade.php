@extends('backend.template.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">
                    category Details</h5>
                <div class="row">
                    <div class="col-xl-5 col-lg-6 text-center">
                        <img class="w-100 border-radius-lg shadow-lg mx-auto"
                            src="../../../assets/img/products/product-details-1.jpg" alt="chair">
                        <div class="my-gallery d-flex mt-4 pt-2" itemscope itemtype="http://schema.org/ImageGallery">
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="../../../assets/img/products/product-details-2.jpg" itemprop="contentUrl"
                                    data-size="500x600">
                                    <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="../../../assets/img/products/product-details-2.jpg"
                                        alt="Image description" />
                                </a>
                            </figure>
                            <figure class="ms-3" itemprop="associatedMedia" itemscope
                                itemtype="http://schema.org/ImageObject">
                                <a href="../../../assets/img/products/product-details-3.jpg" itemprop="contentUrl"
                                    data-size="500x600">
                                    <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="../../../assets/img/products/product-details-3.jpg" itemprop="thumbnail"
                                        alt="Image description" />
                                </a>
                            </figure>
                            <figure class="ms-3" itemprop="associatedMedia" itemscope
                                itemtype="http://schema.org/ImageObject">
                                <a href="../../../assets/img/products/product-details-4.jpg" itemprop="contentUrl"
                                    data-size="500x600">
                                    <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="../../../assets/img/products/product-details-4.jpg" itemprop="thumbnail"
                                        alt="Image description" />
                                </a>
                            </figure>
                            <figure class="ms-3" itemprop="associatedMedia" itemscope
                                itemtype="http://schema.org/ImageObject">
                                <a href="../../../assets/img/products/product-details-5.jpg" itemprop="contentUrl"
                                    data-size="500x600">
                                    <img class="w-100 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="../../../assets/img/products/product-details-5.jpg" itemprop="thumbnail"
                                        alt="Image description" />
                                </a>
                            </figure>
                        </div>

                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                            <div class="pswp__bg"></div>

                            <div class="pswp__scroll-wrap">


                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>

                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">

                                        <div class="pswp__counter"></div>
                                        <button class="btn btn-white btn-sm pswp__button pswp__button--close">Close
                                            (Esc)</button>
                                        <button
                                            class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                                        <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                                        </button>
                                        <button
                                            class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                                        </button>


                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <h3 class="mt-lg-0 mt-4">Category Name : </h3>
                        <h3>{{$category->name}}</h3>

                        <br>
                        <h6 class="mb-0 mt-3">Category Status</h6>
                        <h5>{{$category->status}}</h5>
                        <br>
                        <label class="mt-4">Description</label>
                        <h5>{{$category->description}}</h5>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection
