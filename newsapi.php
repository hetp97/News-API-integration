

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<script type="text/javascript">
	var url = 'http://newsapi.org/v2/everything?' +
          'q=Apple&' +
          'from=2020-03-13&' +
          'sortBy=popularity&' +
          'apiKey=8b78c67162cc4d01abdbf898ac82a6b2';

var req = new Request(url);

fetch(req)
    .then(function(response) {
        console.log(response.json());
    })
</script>
</html>