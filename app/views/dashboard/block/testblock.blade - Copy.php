
{{Form::open(array('url' => 'test'))}}
     
   {{ Form::text('block',$block->desc) }}     
<!-- <a href="#">{{ $block->desc }}</a> -->

    <div class="acc_container">
        <div class="block">
            @foreach ( $block->blocks as $b )
             
            @foreach ( $b->blockheaders as $bh )
            <div class="acc_content_head">
                <span class="lh3">
                {{ Form::text('blockheader[]',$bh->header) }}
                {{ Form::hidden('blockheader_id[]',$bh->id) }}
                <span style="font-size: 0.8em;"> 
                {{ Form::text('subhead[]', $bh->sub_header) }}</span></span><span class="rh3">
                {{Form::text('price[]', $bh->price) }}</span>
                <div style="clear: both;"></div>
            </div>
            @endforeach
            <div class="menu_l">
                <ul>
                    @foreach ( $b->items as $i )
                    <li>
                    {{ Form::text('item[]', $i->desc) }}</li>
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
           </div>{{Form::submit('submit')}}
           {{Form::close()}}
           @endforeach

       </div>
   </div>
   
</div>