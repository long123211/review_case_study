@extends('frontend.layout.user.master')

@section('content')
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
            <div class="banner" >
                <ul>
                    <!-- THE FIRST SLIDE -->
                    @foreach($slide as $sli)
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 50%; height: 50%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{asset('storage/'.$sli->image) }}" data-src="{{asset('storage/'.$sli->image) }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{asset('storage/'.$sli->image) }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<div class="container">
    <p class="pull-left">Có {{count($restaurant)}} địa điểm </p>
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                @foreach($category as $cate)
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <span value="{{$cate->id}}">{{$cate->name}}</span>
                        <div class="beta-products-details">

                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($restaurant as $res)
                            @if($res->categories_id == $cate->id)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('show.Restaurant',$res->id)}}"><img src="{{ asset('storage/'.$res->image) }}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$res->name}}</p>
                                        <p class="single-item-price">
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                                    <td>
                                        <input id="input-1" name="input-1" class="rating rating-loading"  data-min="0" data-max="5" data-step="0.1" value="" data-size="xs" disabled="">
                                    </td>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('favorite',$res->id)}}"><i class="fa fa-heart "></i></a>
                                        <a class="beta-btn primary" href="{{route('show.Restaurant',$res->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                <!-- <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div>
                                                        <th width="400px">Star</th>
                                                        <th width="100px">View</th>
                                                    </div>
                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <script type="text/javascript">
                                    $("#input-id").rating();
                                </script>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div> <!-- .beta-products-list -->
                
                    <div class="space50">&nbsp;</div>
                </div>
                @endforeach
            </div>

        </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
</div> <!-- #content -->
</div> <!-- .container -->
@endsection