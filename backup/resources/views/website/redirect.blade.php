<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to Payment...</title>
</head>
<body onload="document.forms['ccavenue_form'].submit();">
    <h2>Please wait, redirecting to payment page...</h2>
    <form method="post" name="ccavenue_form" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
        <input type="hidden" name="encRequest" value="{{ $encRequest }}">
        <input type="hidden" name="access_code" value="{{ $access_code }}">
    </form>
</body>
</html>
