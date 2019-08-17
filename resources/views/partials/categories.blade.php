<div class="index-column-blog row-service">
    <ul class="links parent panel-group" role="tablist" aria-multiselectable="true" id="product_category-1">
        @foreach ($categories as $category)
            <li class=" lv0">
                <a href="{{$category->toLink()}}" title="{{$category->title}}">{{$category->title}}</a>
                @if(count($category->children)>0)
                    <span data-toggle="collapse" data-parent="#product_category-{{$category->id}}" class="collapse_cape collapsed" aria-expanded="false" href="#category-{{$category->id}}" aria-controls="category-{{$category->id}}"></span>
                    <ul class="links children collapse " id="category-{{$category->id}}">
                    @foreach($category->children as $child)
                            <li class="lv1">
                                <a href="{{ $child->toLink()}}">- {{ $child->title}}</a>
                            </li>
                    @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
