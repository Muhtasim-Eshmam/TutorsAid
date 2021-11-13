@component('mail::message')
TutorsAid
TutorsAid


Dear,<input type="button"  value="{{request('name')}}" disabled><br> 

Your salary  <input type="button" id="subject" name="subject" value="{{request('amount')}}" disabled><br>  for <input type="button" id="subject" name="subject" value="{{request('month')}}" disabled><br> has been added !!

The status is <input type="button" id="subject" name="subject" value="{{request('status')}}" disabled><br> 


Please Contact : 01776495947 for query
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
