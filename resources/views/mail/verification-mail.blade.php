<x-mail::message>
# Verify {{ config('app.name') }} Account!

## Hey! {{ $user->name }},
@if ($source === "registeration")
Please verify your email address to complete the registration process.<br>
@elseif ($source === "registeration")
Please verify your email address to reset your password.<br>
@endif
# {{ $user->code }}<br>
## We are here to help you!
@if ($source === "registration")
If you did not create this account, please ignore this email.<br>
We are committed to protecting your privacy and will never share your information with third parties without your consent.<br>
@elseif ($source === "reset-password")
If you did not apply for reset password, please ignore this email.<br>
@endif

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
