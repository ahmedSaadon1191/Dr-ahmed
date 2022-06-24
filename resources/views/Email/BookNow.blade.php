@component('mail::message')

<h1>welcome Dr Ahmed</h1>

<br>

you have recived a message for Booking

<br>
<center> <h2>

name : {{ $mailData->name }} <br>
email : {{ $mailData->email }} <br>
phone : {{ $mailData->phone }} <br>
service : {{ $mailData->services }} <br>
location : {{ $mailData->location }} <br>
message : {{ $mailData->message }} <br>

</h2></center>

 <br>



 <br>
 <br>


Thanks,<br>
@endcomponent
