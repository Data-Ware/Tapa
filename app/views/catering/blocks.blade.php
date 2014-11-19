<div id="menu">
@foreach ( $cat as $c )
    <h2 class="acc_trigger">
        <a href="#">{{ $c->desc }}</a>
    </h2>
    <div class="acc_container">
        <div class="block">
            @foreach ( $c->blocks as $b )
            @foreach ( $b->blockheaders as $bh )
            <div class="acc_content_head">
                <span class="lh3">{{ $bh->header }}<span style="font-size: 0.8em;"> {{ $bh->sub_header }}</span></span><span class="rh3">{{ $bh->price }}</span>
                <div style="clear: both;"></div>
            </div>
            @endforeach
            <div class="menu_l">
                <ul>
                    @foreach ( $b->items as $i )
                    <li>{{ $i->desc }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="menu_r">
                <div id="gallery">
                    <ul>
                    @foreach ( $b->imgs as $i )
                    <li>
                        <a href="{{$i->a_path}}" title="{{$i->title}}">
                           <img src="{{$i->img_path}}"alt="{{$i->alt}}" />
                       </a>
                   </li>
                   @endforeach
                   </ul>
               </div>
           </div>
           @endforeach
       </div>
   </div>
   @endforeach