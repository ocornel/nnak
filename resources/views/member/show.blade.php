<div class="cbp-l-member-img">
	<img src="{{$member->image_url}}" alt="">
</div>
<div class="cbp-l-member-info">
	<div class="cbp-l-member-name">{{$member->name}}</div>
	<div class="cbp-l-member-position">{{$member->profession}}</div>
	<div class="cbp-l-member-desc">
		{!! $member->profile !!}
	</div>
</div>
