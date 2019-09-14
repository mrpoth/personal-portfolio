@extends('_layouts.master')
@section('title', 'Adam Pothitos - A Personal Site')
@section('body')
  <body style="background:url(https://images.unsplash.com/photo-1512981566925-4937ba1d2b2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80); background-size:cover;">
<div class="email-project-container">
<div class="enterdetails">
  <input type="text" name="emailDetails" value="" id="chooseEmail" placeholder="Enter">
</div>
<div class="card main" id="mainCard">
  <div class="card-container">
    <div class="card-body front" id="maincardfront">
      <p id="myEmail"></p>
      <p id="email-project-instructions">Enter your email address, then hover to get help!</p>
      <p id="hint">Hint: possible options include Outlook/Hotmail/Live, Gmail, and iCloud</p>
    </div>
    <div class="card-body back" id="maincardback">
      <div id="noEmailEntered">
        <div class="card-text">
          You haven't entered a valid email address!
        </div>
      </div>
      <div id="gmailOptions" style="display:none;">
        <div class="card-text">
          <h2>Gmail</h2>
        </div>
        <ul class="card-list">
          <li>
            <div class="card-link"><a href="https://support.google.com/accounts/troubleshooter/2402620?hl=en" target="_blank">Can't sign in</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.google.com/mail/answer/7015314?hl=en&ref_topic=3394215" target="_blank">Messages are missing</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.google.com/mail/topic/3394657?hl=en&ref_topic=3394215" target="_blank">Spam/suspicious emails</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.google.com/mail/answer/6078445?hl=en&ref_topic=7065107" target="_blank">Add another account in the app</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.google.com/mail/?hl=en#topic=3394215" target="_blank">Other issues</a></div>
          </li>
      </div>
      </ul>
      <div id="microsoftOptions" style="display:none;">
        <div class="card-text">
          <h2>Outlook</h2>
        </div>
        <ul class="card-list">
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-gb/help/12429/microsoft-account-sign-in-cant" target="_blank">Can't sign in</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.office.com/en-us/article/10-tips-on-how-to-help-reduce-spam-55F756E8-688B-41C3-A086-8F68CCC592F6" target="_blank">Reduce spam emails</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.office.com/en-us/article/Restore-deleted-email-messages-in-Outlook-com-cf06ab1b-ae0b-418c-a4d9-4e895f83ed50" target="_blank">Missing messages</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-us/help/13967/microsoft-account-unusual-sign-in" target="_blank">Suspicious email</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-gb/hub/4294457/microsoft-account-help" target="_blank">Other issues</a></div>
          </li>
        </ul>
      </div>
      <div id="appleOptions" style="display:none;">
        <div class="card-text">
          <h2>Apple</h2>
        </div>
        <ul class="card-list">
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-gb/help/12429/microsoft-account-sign-in-cant" target="_blank">Can't sign in</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.office.com/en-us/article/10-tips-on-how-to-help-reduce-spam-55F756E8-688B-41C3-A086-8F68CCC592F6" target="_blank">Reduce spam emails</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.office.com/en-us/article/Restore-deleted-email-messages-in-Outlook-com-cf06ab1b-ae0b-418c-a4d9-4e895f83ed50" target="_blank">Missing messages</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-us/help/13967/microsoft-account-unusual-sign-in" target="_blank">Suspicious email</a></div>
          </li>
          <li>
            <div class="card-link"><a href="https://support.microsoft.com/en-gb/hub/4294457/microsoft-account-help" target="_blank">Other issues</a></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</body>
@endsection
@push('scripts')
  <script src="{{mix('js/email-project.js', 'assets/build')}}"></script>
@endpush
