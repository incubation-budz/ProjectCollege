@extends('layout.app')


@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle" style="height:200px!important"></div>




</section>
<div class="topic text-center mt-4 ">
    <h5 class="heading">NEWS AND EVENTS</h5>
</div>




<section id="eventcarousel"  class="pt-5">
        <div class="container-fluid p-0 m-0 pt-2">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner row w-100 mx-auto p-0 m-0 px-4">
                    <div class="carousel-item col-md-4 active">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 1</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                            <a href="#" >See More</a><br>
                            <small class="text-muted ">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 2</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 3</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 4</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 5</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 6</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item col-md-4">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">Card 7</h4>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                            a little bit longer.</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated 3 mins ago</small>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-12 text-center mt-4">
                        <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
                          <i class="fa fa-lg fa-chevron-left"></i>
                        </a>
                        <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
                          <i class="fa fa-lg fa-chevron-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </section>




            <section id="side-nav" class="pb-5 pt-2">
                <div class="container-fluid p-0 m-0 pl-4" >
                    <div class="row">
                        <div class="col-md-8 pl-5 pb-5">
                            <div class="images pl-4">

                                <div class="highlights p-0 m-0">
                                        <hr>
                              <h4 class="text-center p-0 m-0">Highlights</h4>
                              <hr>
                            </div>
                                <ul class="image-event pt-4">

                                        <li class="">

                                        <img src="{{asset('img/Cover/cover1.jpg')}}" alt="" class="img-fluid" >

                                        </li>
                                        <li class="">

                                                <img src="{{asset('img/Cover/cover2.jpg')}}" alt="" class="img-fluid" >




                                        </li>
                                       <li class="col-md-4 p-0">
                                        <img src="{{asset('img/Cover/cover3.jpg')}}" alt="" class="img-fluid" >

                                        </li>



                                    </ul>
                                </div>
                        </div>

                        <div class="newsevent pt-4 col-md-4 p-0 m-0 pl-5" >

                                {{-- <div class="card text-center">
                    <div class="card-header">
                    News And Events
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni ea rerum reiciendis doloribus qui iure dolores, itaque animi quaerat culpa! Iusto sint optio et, non cum quaerat accusantium quia iure.</p>
                    <a href="#">See More</a>
                    </div>
                    <div class="card-footer text-muted">
                    2 days ago
                    </div> --}}





                    <div class="row ">



                            <div class="clearfix visible-sm visible-xs">
                              &nbsp;
                            </div>
                            <div class="">
                              <ul class="nav nav-pills" role="tablist">
                                <li class="active">
                                  <a data-toggle="tab" href="#tab1" role="tab">Events</a>
                                </li>
                                <li class="active">
                                  <a data-toggle="tab" href="#tab2" role="tab">News</a>
                                </li>
                              </ul>
                            </div>
                          </div><!-- / row -->

                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="media">
                                    <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Nov</span></a>
                                    <div class="media-body">
                                      <h4 class="media-heading">
                                        <a href="#">Venture Tech</a>
                                      </h4>
                                      <div class="meta-data">
                                        <span class="longDate">Nov 30, 2016</span> <span class="timeEl">12:00pm - 02:00pm</span>
                                      </div>
                                      <p>
                                        See the latest inspirations in the local tech scene.
                                      </p>
                                    </div><!-- / media-body -->
                                  </div><!-- / media -->
                                  <div class="media">
                                    <a class="pull-left" href="#"><span class="dateEl"><em>11</em>Dec</span></a>
                                    <div class="media-body">
                                      <h4 class="media-heading">
                                        <a href="#">Tech Conference</a>
                                      </h4>
                                      <div class="meta-data">
                                        <span class="longDate">Dec 11, 2016</span> <span class="timeEl">06:00pm - 07:30pm</span>
                                      </div>
                                      <p>
                                        Local tech entrepreneurs gather to share their knowledge.
                                      </p>
                                    </div><!-- / media-body -->
                                  </div><!-- / media -->

                                </div><!-- / .col-md-6 -->

                              </div><!-- / row -->

                            </div>




                            <div class="tab-pane fade" id="tab2">
                              <div class="row">
                                <div class="col-md-9">
                                  <div class="blogPost--small">
                                    <div class="media">
                                      <span class="pull-left"><a href="#"><span class="date"><span>29</span> <small>Nov</small></span></a></span>
                                      <div class="media-body">
                                        <h4 class="media-heading">
                                          <a href="#">Building In WebCorpCo CMS 8</a>
                                        </h4>
                                        <p>
                                          Learn about all of the possibilities of web design in our latest CMS release.
                                        </p>
                                      </div>
                                    </div>
                                  </div><!-- / blogPost -->
                                  <div class="blogPost--small">
                                    <div class="media">
                                      <span class="pull-left"><a href="#"><span class="date"><span>22</span> <small>Nov</small></span></a></span>
                                      <div class="media-body">
                                        <h4 class="media-heading">
                                          <a href="#">WebCorpCo Named To Inc. 5000</a>
                                        </h4>
                                        <p>
                                          Inc. magazine today ranked WebCorpCo as the 1,870th fastest growing company on the 34th annual Inc. 5000.
                                        </p>
                                      </div>
                                    </div>
                                  </div><!-- / blogPost -->
                                </div><!-- / .col-md-6 -->



                            </div>
                          </div>
                    </div>








                        </div>

                    </div>
                </div>

            </section>

<section id="newscarousel" class="pt-5">

        <ul class="newscarousel ">
            <li class="col-md-2 p-0">
                 <div class="card">
            <img class="card-img-top" src="{{asset('img/Cover/cover1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
              </div>
            </li>
            <li class="col-md-2 p-0">
                    <div class="card">
               <img class="card-img-top" src="{{asset('img/Cover/cover1.jpg')}}" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                   </div>
                 </div>
               </li>
               <li class="col-md-2 p-0">
                    <div class="card">
               <img class="card-img-top" src="{{asset('img/Cover/cover1.jpg')}}" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                   </div>
                 </div>
               </li>
               <li class="col-md-2 p-0">
                    <div class="card">
               <img class="card-img-top" src="{{asset('img/Cover/cover1.jpg')}}" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                   </div>
                 </div>
               </li>
               <li class="col-md-2 p-0">
                    <div class="card">
               <img class="card-img-top" src="{{asset('img/Cover/cover1.jpg')}}" alt="Card image cap">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   </div>
                   <div class="card-footer">
                     <small class="text-muted">Last updated 3 mins ago</small>
                   </div>
                 </div>
               </li>
        </ul>
</section>


<section id="social" class="pt-1">

    <div class="container-fluid p-0 m-0 pt-3">
        <hr class="">
            <h4 class="text-center">Social Links</h4>
            <hr>
        <div class="row p-4 px-5">
            <div class="col-md-6 embed-responsive embed-responsive-16by9">
                    <iframe width="600" height="390"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY" class="embed-responsive-item p-3 pl-5"  frameborder="0" scrolling="yes" allowtransparency="true">
                    </iframe>
            </div>
            <div class="col-md-6 pr-5 embed-responsive embed-responsive-16by9">
                    <iframe src="http://instagram.com/p/a1wDZKopa2/embed" width="600" height="400" frameborder="0" scrolling="yes" allowtransparency="true" class="embed-responsive-item p-3 pr-5" ></iframe>
            </div>

        </div>
        <hr>
    </div>



</section>
@endsection
