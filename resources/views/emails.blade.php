@component('mail::message')
<img src="{{asset('uploads/background.png')}}" alt="">
# Thank you!

Thank you for purchasing from our store. Below is your receipt and link to track your shipping.


@component('mail::table')

{!!$table!!}

@endcomponent

@component('mail::button', ['url' => 'https://larave-news.com', 'color' => 'blue'])
Track you shipping
@endcomponent

@endcomponent
