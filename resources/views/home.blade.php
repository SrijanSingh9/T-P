<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="post-container">
        @include('posts')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript">
        var page = 1;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });

        function loadMoreData(page) {
            $.ajax({
                url: '/home/posts?page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                if (data.html == " ") {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('#post-container').append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });
        }
    </script>
</body>
</html>
