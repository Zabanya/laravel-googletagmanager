@if($enabled)
<script>
window.dataLayer = window.dataLayer || [];
dataLayer = [{!! $dataLayer->toJson() !!}];
@foreach($pushData as $item)
dataLayer.push({!! $item->toJson() !!});
@endforeach
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
})(window,document,'script','dataLayer','{{ $id }}');</script>
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
@endif
