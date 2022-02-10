@component('mail::message')
# Welcome to InstaClone

This is a community of fellow developers and we love that you have joined us.

<br><br>
Click on the button to be redirected to our website!
@component('mail::button', ['url' => '/'])
    Click here
@endcomponent

All the best,<br>
Your name
@endcomponent
