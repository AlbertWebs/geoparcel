<div id="footer" style="background-color:#9bb9ca">
    <div class="clearfix"></div>
    <div class="tmnf_container"  >
       <div class="tmnf_foocol first">
        {{-- <img width="100" class="footer_img tranz" src="{{asset('geopoint/wp-content/uploads/2022/03/geo-parcel.png')}}" alt="Home"/> --}}
          <h4 class="widget tmnf_border small_title">GeoParcel Surveys.</h4>

          <div class="textwidget">
             <p>GeoParcel Surveys. routinely provides surveying solutions for business, real estate, land development and civil engineering in Nairobi Area.<br /> The highest quality, most accurate &amp; precise land surveying services.</p>
          </div>
          {{-- <form role="search" class="searchform" method="get" action="http://themestate.com/demo/geopoint/"> <label for="search-form-637c692f17862"> <span class="screen-reader-text">Search for:</span> </label> <input id="search-form-637c692f17862"  type="text" name="s" class="s p-border" size="30" value="Search..." onfocus="if (this.value = '') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search...';}" /> <button class='searchSubmit ribbon' ><i class="fas fa-search"></i></button></form> --}}
       </div>
       <div class="tmnf_foocol sec">
          <h4 class="widget tmnf_border small_title">Latest News</h4>
          <ul>
            <?php $Products = DB::table('products')->get(); ?>
            @foreach ($Products as $item)
             <li> <a href="{{url('/')}}/products/{{$item->slung}}">{{$item->title}}</a></li>
            @endforeach

          </ul>
       </div>
       <div class="tmnf_foocol third">
          <h4 class="widget tmnf_border small_title">Services</h4>
          <ul>
            <?php $Services = DB::table('services')->get(); ?>
            @foreach ($Services as $item)
             <li class="cat-item cat-item-14"><a href="{{url('/')}}/services/{{$item->slung}}">{{$item->title}}</a></li>
             @endforeach
          </ul>
       </div>
       <div class="tmnf_foocol last">
          <h4 class="widget tmnf_border small_title">Quick Links</h4>
          <ul>
             <li><a href="#">Sitemap</a></li>
             <li><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a></li>
             <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
             <li><a href="{{url('/')}}/copyright-statement">Copyright Statement</a></li>
          </ul>
       </div>
    </div>
    <div class="clearfix"></div>
    <div class="bottom_line tmnf_border" style="background-color:#034567">
       <div class="tmnf_container">
          <div class="tmnf_column tmnf_column_5">
             <div class="footer_credits" style="color:#ffffff">Copyright © {{date('Y')}} - GeoParcel Surveys Limited All Rights Reserved</div>
          </div>
          <div class="tmnf_column tmnf_column_7">
             <ul class="tmnf_social_icons tranz">
                <li class="tmnf_twitter"><a style="color:#ffffff" class="mk-social-twitter-alt" href="index.html#"><i class="fab fa-twitter"></i><span style="color:#ffffff">Twitter</span></a></li>
                <li class="tmnf_linkedin"><a style="color:#ffffff" class="mk-social-linkedin" title="LinkedIn" href="index.html#"><i class="fab fa-linkedin-in"></i><span style="color:#ffffff">LinkedIn</span></a></li>
                <li class="tmnf_facebook"><a style="color:#ffffff" href="#"><i class="fab fa-facebook"></i><span style="color:#ffffff">Facebook</span></a></li>
                <li class="tmnf_pinterest"><a style="color:#ffffff" href="#"><i class="fab fa-pinterest"></i><span style="color:#ffffff">Pinterest</span></a></li>
             </ul>
          </div>
       </div>
    </div>
    <div class="clearfix"></div>
 </div>
