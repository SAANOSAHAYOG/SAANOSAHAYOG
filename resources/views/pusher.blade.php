<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('3c112b2d947651cdf4ad', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('Saanosahayog');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>Saanosahayog</code>
    with event name <code>my-event</code>.
  </p>
</body>